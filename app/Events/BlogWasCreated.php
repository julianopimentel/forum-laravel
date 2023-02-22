<?php

namespace App\Events;

use App\Models\Blog;
use Illuminate\Queue\SerializesModels;

class BlogWasCreated
{
    use SerializesModels;

    public $thread;

    public function __construct(Blog $thread)
    {
        $this->thread = $thread;
    }
}
