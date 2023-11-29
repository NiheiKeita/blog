<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use Inertia\Inertia;

class TagController extends Controller
{

    public function index(Request $request){
        $tags = Tag::all();
        return Inertia::render('Tag/Index', [
            'tags' => $tags,
        ]);
    }

    public function show(Request $request){
        $tag = Tag::find($request->id);
        if(empty($tag)){
            abort(404);
        }
        $blogs = $tag->blogs ?? null;
        return Inertia::render('Tag/Show', [
            'blogs' => $blogs,
            'tag' => $tag,
        ]);
    }

}
