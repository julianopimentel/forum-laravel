<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'     => ['required', 'max:60', 'min:5'],
            'body'      => ['required', 'min:5'],
            'category'  => ['required'],
            'tags'      => ['array'],
            'tags.*'    => ['exists:tags,id'],
        ];
    }

    public function author(): User
    {
        return $this->user();
    }

    public function title(): string
    {
        return $this->get('title');
    }

    public function body(): string
    {
        return $this->get('body');
    }

    public function category(): string
    {
        return $this->get('category');
    }

    public function tags(): array
    {
        return $this->get('tags', []);
    }
}
