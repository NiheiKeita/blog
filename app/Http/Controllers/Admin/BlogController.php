<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Blog;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return Inertia::render('Admin/Blog/List', [
            'blogs' => $blogs,
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Blog/Create');
    }
    public function edit(){
        return Inertia::render('Admin/Blog/Update');
    }
    public function store(){
        return redirect()->route('admin.blog.index');
    }
    public function update(){
        return redirect()->route('admin.blog.index');
    }
    public function show(){
        return redirect()->route('admin.blog.index');
    }
    public function delete(){
        return redirect()->route('admin.blog.index');
    }
}

