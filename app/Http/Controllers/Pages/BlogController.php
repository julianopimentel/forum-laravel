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

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Authenticate::class, EnsureEmailIsVerified::class])->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $threads = Blog::orderBy('id', 'desc');

        if (request('search')) {
            $threads->category->where('title', 'Like', '%' . request('search') . '%');
        }

        return view('home.blog.blog', [
            'threads' => $threads->paginate(10),
            'categories'    => Category::all(),
        ]);
    }

    public function create()
    {
        return view('home.blog.post', [
            'categories'    => Category::all(),
            'tags'          => Tag::all(),
        ]);
    }

    public function store(BlogStoreRequest $request)
    {
        $this->dispatchSync(BlogThread::fromRequest($request));

        return redirect()->route('threads.index')->with('success', 'Thread created!');
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

    public function edit(Blog $thread)
    {
        $this->authorize(ThreadPolicy::UPDATE, $thread);

        $oldTags = $thread->tags()->pluck('id')->toArray();
        $selectedCategory = $thread->category;

        return view('pages.threads.edit', [
            'thread'            => $thread,
            'tags'              => Tag::all(),
            'oldTags'           => $oldTags,
            'categories'        => Category::all(),
            'selectedCategory'  => $selectedCategory,
        ]);
    }

    public function update(BlogStoreRequest $request, Blog $thread)
    {
        $this->authorize(ThreadPolicy::UPDATE, $thread);

        $this->dispatchSync(UpdateThread::fromRequest($thread, $request));

        return redirect()->route('threads.index')->with('success', 'Thread Updated!');
    }

}
