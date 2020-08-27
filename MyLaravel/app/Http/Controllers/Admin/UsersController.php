<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function index() { 
        $users = User::all(); 
        return view('backend.users.index', compact('users')); 
    }

    public function edit($id) { 
        $user = User::whereId($id)->firstOrFail(); 
        $roles = Role::all(); 
        $selectedRoles = $user->$roles->pluck('id')->toArray(); 
        return view('backend.users.edit', compact('user', 'roles', 'selectedRoles')); 
    }
}
