<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        ]);
        $token = $user->createToken('apptoken')->plainTextToken;
        $response = ['token' => $token];

        return response($response, 201);
    }
}
