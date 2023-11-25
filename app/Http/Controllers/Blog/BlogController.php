<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use Inertia\Inertia;

class BlogController extends Controller
{
    private $title = "top";

    public function index(Request $request){
        $blogs = Blog::all();
        return Inertia::render('Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function show(Request $request){
        $blog = Blog::find($request->id);
        $tags = \Common::get_tag_names($blog->tags);
        return Inertia::render('Blog/Contents/Blog'.$blog->id, [
            'blog' => $blog,
            'tags' => $tags,
        ]);
    }

}
