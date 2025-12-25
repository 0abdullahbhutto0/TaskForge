<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(){
        $attribures = request()->validate([
            "email"=>['required'],
            "password"=>['required']
        ]);
        if(!Auth::attempt($attribures)){
            throw ValidationException::withMessages([
                'email'=>'Sorry, credentials dont match'
            ]);
        }
        request()->session()->regenerate();
        return redirect('/dashboard');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
