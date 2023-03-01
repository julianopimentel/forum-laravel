<?php

namespace App\Http\Controllers\Pages;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Policies\ReplyPolicy;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\CreateReplyBlogRequest;
use App\Jobs\CreateReplyBlog;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class BlogReplyController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Authenticate::class, EnsureEmailIsVerified::class]);
    }

    public function store(CreateReplyBlogRequest $request)
    {
        $this->authorize(ReplyPolicy::CREATE, Reply::class);

        $this->dispatchSync(CreateReplyBlog::fromRequest($request));

        return back()->with('success', 'Reply Created');
    }

    public function redirect($id, $type)
    {
        $reply = Reply::where('replyable_id', $id)->where('replyable_type', $type)->firstOrFail();

        return redirect()->route('blog.show', [$reply->replyAble()->category->slug(), $reply->replyAble()->slug()]);
    }
}
