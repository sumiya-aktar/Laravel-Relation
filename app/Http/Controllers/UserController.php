<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index () {
    $role =Role::with('user')->get();
    // dd($users);
    return view('user', compact('role'));
    }
}
