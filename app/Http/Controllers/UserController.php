<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('index', compact('users'));
    }

    
    public function show($user){
        $user = User::find($user);
        return view('show', compact('user'));
    }

}
