<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TopController extends Controller
{
    private $title = "top";

    public function index(Request $request){
        return redirect()->route('blog.index');
        // $num = 0;
        // $hello = 'Hello World from Inertia';
        // return Inertia::render('Contents/Index'.$num, [
        //     'hello' => $hello,
        // ]);
    }
}

