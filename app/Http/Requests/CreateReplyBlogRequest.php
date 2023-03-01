<?php

namespace App\Http\Requests;

use App\Models\ReplyAble;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CreateReplyBlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'body'              => ['required'],
            'replyable_id'      => ['required'],
            'replyable_type'    => ['required', 'in:' . Blog::TABLE],
        ];
    }

    public function replyAble(): ReplyAble
    {
        return $this->findReplyAble($this->get('replyable_id'),  $this->get('replyable_type'));
    }

    private function findReplyAble(int $id, string $type): ReplyAble
    {
        switch ($type) {
            case Blog::TABLE:
                return Blog::find($id);
        }
        abort(404);
    }

    public function author(): User
    {
        return $this->user();
    }

    public function body(): string
    {
        return $this->get('body');
    }
}
