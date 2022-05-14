<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller{

    public function showAllLogin(Request $request) {
    $email = $request->email;
    $password = $request->password;

    $user = User::where('email', $email)->first();

    $token = bin2hex(random_bytes(40));

    $user->update(['token'=>$token]);

    return response()->json($user);
    }
}
