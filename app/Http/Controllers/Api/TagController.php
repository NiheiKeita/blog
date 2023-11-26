<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Models\Tag;
use App\Http\Requests\Admin\BlogCreateRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class TagController extends Controller
{
    public function index(){
        $blogs = Tag::all();
        return $blogs;
    }
}

