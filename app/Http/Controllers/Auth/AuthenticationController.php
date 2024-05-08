<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;

class AuthenticationController extends Controller
{
    public function register(RegisterListenersPass){
        return response ([
            'message' => 'Api is working '
        ], 200);
    }
}
