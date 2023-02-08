<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list() {
        $users = User::all();
        $title = 'users';
        return view('admin.user.list', compact('users','title'));
    }
}
