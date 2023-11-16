<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function login(){
        return Inertia::render('Admin/Login');
    }
    public function check(LoginRequest $request){
        dd($request);
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if(Auth::guard('admin')->attempt($credentials, false)){
            return redirect()->route('admin.top');
        }else{
            return back()->withErrors(array('login' => 'メールアドレスかパスワードが間違っています。'))->withInput();
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}

