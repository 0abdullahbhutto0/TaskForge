<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('/register');
    }

    public function store(){
       $attributes =  request()->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required', 'min:8']
       ]);

      $user =  User::create($attributes);
      $role = Role::where('name', 'unassigned')->first();
      $user->roles()->attach($role->id);
      Auth::login($user);
      return redirect('/dashboard');

    }
}
