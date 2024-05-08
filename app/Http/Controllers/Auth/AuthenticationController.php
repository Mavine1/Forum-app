<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\models\User;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function register(RegisterRequest $request){
        $request->validated();

        $userData = [
            'name' => $request->name,
            'username'=> $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $user = User::create($userData);
        $token => $user->createToken('forumapp')->plainTextToken;
    }
}
