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
use App\Jobs\SubscribeToSubscriptionAble;
use App\Jobs\UnsubscribeFromSubscriptionAble;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

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
            $threads->where('title', 'Like', '%' . request('search') . '%');
        }

        return view('pages.threads.index', [
            'threads' => $threads->paginate(10),
            'categories'    => Category::all(),
        ]);
    }

    public function create()
    {
        return view('pages.threads.create', [
            'categories'    => Category::all(),
            'tags'          => Tag::all(),
        ]);
    }

    public function store(BlogStoreRequest $request)
    {
        $this->dispatchSync(BlogThread::fromRequest($request));

        return redirect()->route('threads.index')->with('success', 'Thread created!');
    }

    public function show(Category $category, Blog $thread)
    {
        $expireAt = now()->addHours(12);

        $categories = Category::all();

        views($thread)
            ->cooldown($expireAt)
            ->record();

        return view('pages.threads.show', compact('thread', 'category', 'categories'));
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

    public function subscribe(Request $request, Category $category, Blog $thread)
    {
        $this->authorize(ThreadPolicy::SUBSCRIBE, $thread);

        $this->dispatchSync(new SubscribeToSubscriptionAble($request->user(), $thread));

        return redirect()->route('threads.show', [$thread->category->slug(), $thread->slug()])
            ->with('success', 'You have been subscribed to this thread');
    }

    public function unsubscribe(Request $request, Category $category, Blog $thread)
    {
        $this->authorize(ThreadPolicy::UNSUBSCRIBE, $thread);

        $this->dispatchSync(new UnsubscribeFromSubscriptionAble($request->user(), $thread));

        return redirect()->route('threads.show', [$thread->category->slug(), $thread->slug()])
            ->with('success', 'You have been unsubscribed from this thread');
    }
}
