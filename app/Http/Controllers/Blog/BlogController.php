<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;

class BlogController extends Controller
{
    private $title = "top";

    public function index(Request $request){
        $title = $this->title;
        $num = 0;
        return view('blog.index',compact('title','num'));
    }

    public function content(Request $request){
        $title = $this->title;
        $num = $request->id;
        $blog = Blog::find($request->id);

        return view('blog.content',compact('title','num','blog'));
    }

}
