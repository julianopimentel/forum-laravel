<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\BlogStoreRequest;
use App\Jobs\BlogThread;
use App\Jobs\UpdateBlog;
use App\Jobs\UpdateThread;
use App\Models\Blog;
use App\Models\Tag;
use App\Policies\BlogPolicy;

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware([IsAdmin::class, Authenticate::class]);
    }

    public function index()
    {
        return view('admin.blog.index', [
            'blogs'    => Blog::orderBy('id', 'desc')->paginate(10),
            'categories'    => Category::all(),
        ]);
    }

    public function create()
    {
        return view('admin.blog.create', [
            'categories'    => Category::all(),
            'tags'          => Tag::all(),
        ]);
    }

    public function store(BlogStoreRequest $request)
    {

        $this->dispatchSync(BlogThread::fromRequest($request));
        return redirect()->route('admin.blog.index')->with('success', 'Tópico criado!');
    }

    public function edit(Blog $blog)
    {


        $this->authorize(BlogPolicy::UPDATE, $blog);

        $oldTags = $blog->tags()->pluck('id')->toArray();
        $selectedCategory = $blog->category;


        return view('admin.blog.edit', [
            'blog'            => $blog,
            'tags'              => Tag::all(),
            'oldTags'           => $oldTags,
            'categories'        => Category::all(),
           'selectedCategory'  => $selectedCategory,
        ]);

    }


    public function update(BlogStoreRequest $request, Blog $blog)
    {
        $this->authorize(BlogPolicy::UPDATE, $blog);

        $this->dispatchSync(UpdateBlog::fromRequest($blog, $request));

       return redirect()->route('admin.blog.index')->with('success', 'Tópico atualizado!');
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('danger', 'Tópico deletado');
    }
}
