<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XamppController extends Controller
{
    private $title = "xampp";

    public function index(Request $request){
        $title = $this->title;
        return view('blog.xampp.index',compact('title'));
    }
    public function content001(Request $request){
        $title = $this->title;
        return view('blog.xampp.001',compact('title'));
    }

}
