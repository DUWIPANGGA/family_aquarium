<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (!auth()->attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'code' => 401,
                'message' => 'Invalid email or password'
            ], 401);
        }

        $user = auth()->user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Logged in successfully',
            'token' => $token
        ], 200);
    }
}
