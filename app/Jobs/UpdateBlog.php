<?php

namespace App\Jobs;

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Requests\BlogStoreRequest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class UpdateBlog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $Blog;
    private $attributes;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Blog $Blog, array $attributes = [])
    {
        $this->Blog = $Blog;
        $this->attributes = Arr::only($attributes, [
            'title', 'slug', 'body', 'category_id', 'tags'
        ]);
    }

    public static function fromRequest(Blog $Blog, BlogStoreRequest $request): self
    {
        return new static($Blog, [
            'title'         => $request->title(),
            'body'          => Purifier::clean($request->body()),
            'category_id'   => $request->category(),
            'slug'          => Str::slug($request->title()),
            'tags'          => $request->tags(),
        ]);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->Blog->update($this->attributes);

        if (Arr::has($this->attributes, 'tags')) {
            $this->Blog->syncTags($this->attributes['tags']);
        }

        $this->Blog->save();

        return $this->Blog;
    }
}
