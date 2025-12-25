<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function create(){
        $user = Auth::user();
        //$role = $user->roles;
        //dd($user->hasRole());
        //Gate::authorize('create', $user);
        //Gate::authorize('elevate', $user);
        return view('dashboard', ['user' => $user]);
    }
}
