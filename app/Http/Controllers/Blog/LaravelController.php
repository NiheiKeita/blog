<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    private $title = "laravel";

    public function index(Request $request){
        $title = $this->title;
        return view('blog.laravel.index',compact('title'));
    }
    public function content002(Request $request){
        $title = $this->title;
        return view('blog.laravel.002',compact('title'));
    }

}
