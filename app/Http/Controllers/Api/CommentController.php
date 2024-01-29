<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Blog\CommentRequest;
use Hash;

class CommentController extends Controller
{
    public function store(CommentRequest $request){
        //TODO:コメント作成
        Blog::find($request->blog_id)->comments()->create([
            'comment' => $request->comment,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        //TODO:Responseを治す
        return "ok";
    }
}

