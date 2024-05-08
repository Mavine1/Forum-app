<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;

class AuthenticationController extends Controller
{
    public function register(RegisterRequest $request){
        $request->validated();

        $userData = [
            'name' => $request->name,
            'username'=> $request->username,
            'email' => $request->email
        ]
    }
}
