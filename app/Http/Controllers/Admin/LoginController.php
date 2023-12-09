<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    public function login(){
        return Inertia::render('Admin/Login');
    }
    public function check(LoginRequest $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if(Auth::guard('admin')->attempt($credentials, false)){
            return redirect()->route('admin.blog.index');
        }else{
            return back()->withErrors(array('login' => 'メールアドレスかパスワードが間違っています。'))->withInput();
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}

