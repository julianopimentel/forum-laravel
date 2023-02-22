<?php

namespace App\Jobs;

use App\Events\BlogWasCreated;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use App\Http\Requests\BlogStoreRequest;

class BlogThread
{
    private $title;
    private $body;
    private $category;
    private $tags;
    private $author;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $title, string $body, string $category, array $tags, User $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->category = $category;
        $this->tags = $tags;
        $this->author = $author;
    }


    public static function fromRequest(BlogStoreRequest $request): self
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->category(),
            $request->tags(),
            $request->author(),
        );
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Blog
    {
        $thread = new Blog([
            'title'         => $this->title,
            'slug'          => Str::slug($this->title),
            'body'          => Purifier::clean($this->body),
            'category_id'   => $this->category,
        ]);

        $thread->authoredBy($this->author);
        $thread->syncTags($this->tags);
        $thread->save();

        event(new BlogWasCreated($thread));

        return $thread;
    }
}
