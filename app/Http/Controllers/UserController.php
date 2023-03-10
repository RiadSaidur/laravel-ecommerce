<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user() {
        return view('admin.user.createUser');
    }

    public function saveUser(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
    }

    public function manageUser() {
        $users = User::all();

        return view('admin.user.manage', [
            'users' => $users
        ]);
    }
}
