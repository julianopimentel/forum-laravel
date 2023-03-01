<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Reply;
use App\Models\ReplyAble;
use App\Events\ReplyWasCreated;
use App\Http\Requests\CreateReplyBlogRequest;

class CreateReplyBlog
{
    private $body;
    private $author;
    private $replyAble;

    public function __construct(string $body, User $author, ReplyAble $replyAble)
    {
        $this->body = $body;
        $this->author = $author;
        $this->replyAble = $replyAble;
    }

    public static function fromRequest(CreateReplyBlogRequest $request): self
    {
        return new static(
            $request->body(),
            $request->author(),
            $request->replyAble()
        );
    }

    public function handle(): Reply
    {
        $reply = new Reply([
            'body' => $this->body
        ]);

        $reply->authoredBy($this->author);
        $reply->to($this->replyAble);
        $reply->save();

        event(new ReplyWasCreated($reply));

        return $reply;
    }
}
