<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() { 
        $users = User::all(); 
        return view('backend.users.index', compact('users')); 
    }

}
