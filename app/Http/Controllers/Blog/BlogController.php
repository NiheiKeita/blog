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
        $blogs = Blog::showLists();
        return Inertia::render('Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function show(Request $request){
        $blog = Blog::where('id',$request->id)->with(['blog_blocks.blog_components'])->first();
        // $blog = Blog::find($request->id);
        if(empty($blog) || $blog->is_private){
            abort(404);
        }
        $tags = \Common::get_tag_names($blog->tags ?? null);
        return Inertia::render('Blog/Blog', [
            'blog' => $blog,
            'tags' => $tags,
        ]);
        // return Inertia::render('Blog/Contents/Blog'.$blog->id, [
        //     'blog' => $blog,
        //     'tags' => $tags,
        // ]);
    }

}
