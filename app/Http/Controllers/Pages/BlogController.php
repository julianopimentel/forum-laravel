<?php

namespace App\Http\Controllers\Pages;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use App\Jobs\UpdateThread;
use Illuminate\Http\Request;
use App\Policies\ThreadPolicy;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\BlogStoreRequest;
use App\Jobs\BlogThread;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Authenticate::class, EnsureEmailIsVerified::class])->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $threads = Blog::orderBy('id', 'desc')->paginate(5);

        if (request('search')) {
            $threads->category->where('title', 'Like', '%' . request('search') . '%');
        }

        return view('home.blog.blog', [
            'threads' => $threads,
            'categories'    => Category::all(),
        ]);
    }



    public function show(Category $category, Blog $blog)
    {
        $expireAt = now()->addHours(12);

        $categories = Category::all();

        views($blog)
            ->cooldown($expireAt)
            ->record();

        return view('home.blog.blogShow', compact('blog', 'category', 'categories'));
    }

}
