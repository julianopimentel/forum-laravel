<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Blog;
use App\Exceptions\CannotLikeItem;

class LikeBlogJob
{
    private $blog;
    private $user;

    public function __construct(Blog $blog, User $user)
    {
        $this->blog = $blog;
        $this->user = $user;
    }

    public function handle()
    {
        if ($this->blog->isLikedBy($this->user)) {
            throw CannotLikeItem::alreadyLiked('blog');
        }

        $this->blog->likedBy($this->user);
    }
}
