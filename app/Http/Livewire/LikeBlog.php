<?php

namespace App\Http\Livewire;

use App\Jobs\LikeBlogJob;
use App\Jobs\UnlikeBlogJob;
use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;

class LikeBlog extends Component
{
    use DispatchesJobs;

    public $blog;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function toggleLike()
    {
        if ($this->blog->isLikedBy(Auth::user())) {
            $this->dispatchSync(new UnlikeBlogJob($this->blog, Auth::user()));
        } else {
            $this->dispatchSync(new LikeBlogJob($this->blog, Auth::user()));
        }
    }

    public function render()
    {
        return view('livewire.like-blog');
    }
}
