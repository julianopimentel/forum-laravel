<?php

namespace App\Jobs;

use App\Models\Blog;
use App\Models\User;

class UnlikeBlogJob
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
        $this->blog->dislikedBy($this->user);
    }
}
