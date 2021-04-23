<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'already_user' => 'required|boolean',
            'phone' => 'required|numeric|digits:10',
        ]);

        $user = User::create([
            'email' => $data['email'],
            'already_user' => $data['already_user'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['phone'])
        ]);

        Auth::login($user);

        return ['message' => 'logged in, kinda'];
    }
}
