<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return Inertia::render('Admin/Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function create(){
        return Inertia::render('Admin/Blog/Create');
    }

    public function edit(Request $request){
        $blog = Blog::find($request->id);
        $tags = \Common::get_tag_names($blog->tags);
        return Inertia::render('Admin/Blog/Update', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function store(BlogCreateRequest $request){
        $tags = \Common::double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Blog::create([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->attach(\Common::get_tag_ids($tags));
        return redirect()->route('admin.blog.index');
    }

    public function update(BlogCreateRequest $request){
        $tags = \Common::double_explode(' ', ',', '、', '#', '　', '＃', $request->tags);
        $blog = Blog::find($request->id);
        $blog->update([
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        $blog->tags()->sync(\Common::get_tag_ids($tags));
        return redirect()->route('admin.blog.index');
    }

    public function show(Request $request){
        $blog = Blog::find($request->id);
        $tags = \Common::get_tag_names($blog->tags);
        return Inertia::render('Admin/Blog/Show', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

    public function delete(){
        return redirect()->route('admin.blog.index');
    }
}

