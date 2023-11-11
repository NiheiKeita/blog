<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    private $title = "top";

    public function index(Request $request){
        $title = $this->title;
        $num = '001';
        return view('blog.index',compact('title','num'));
    }

}
