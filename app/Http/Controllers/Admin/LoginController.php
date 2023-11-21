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
        // $credentials = [
        //     'email' => 'keita.nihei.1996.05.29@gmail.com',
        //     'password' => 'nihei4649'
        // ];
        // $aaa = Auth::guard('admin')->attempt($credentials, false);
        // dump($aaa);
        // dd(Hash::make("nihei4649"));
        // dd($request);
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

