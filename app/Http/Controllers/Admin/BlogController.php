<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        return $this->middleware([IsAdmin::class, Authenticate::class]);
    }

    public function index()
    {
        return view('admin.blog.index', [
            'blog'    => Blog::all(),
            'categories'    => Category::all(),
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => ['required', 'unique:categories'],
        ]);

        Category::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Category Created');
    }

    public function edit(Category $category)
    {
        return view('admin.blog.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'  => ['required', 'unique:categories'],
        ]);

        $category->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Category Updated');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Category Deleted');
    }
}
