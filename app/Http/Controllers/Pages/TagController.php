<?php

namespace App\Http\Controllers\Pages;

use App\Models\Tag;
use App\Models\Thread;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        return view('pages.tags.index', [
            'threads'       => Thread::ForTag($tag->slug())->paginate(10),
            'categories'    => Category::all(),
        ]);
    }

    public function indexForum(Tag $tag)
    {
        @dump(Blog::ForTag($tag->slug())->paginate(10));
        return view('home.blog.blog', [
            'threads'       => Blog::ForTag($tag->slug())->paginate(10),
            'categories'    => Category::all(),
        ]);
    }
}
