<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\BlogBlock;
use App\Models\BlogComponent;
use App\Models\Comment;
use App\Models\Component;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return Inertia::render('Admin/Comment/Index', [
            'comments' => $comments,
        ]);
    }
    public function show(Request $request){
        $comment = Comment::find($request->id);
        return Inertia::render('Admin/Comment/Show', [
            'comment' => $comment,
        ]);
    }
}

