<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerUserClient()
    {
        return view('Login.login_create');
    }

    public function registerUserOrganizer()
    {
        return view('Login_org.login_create_org');
    }
}
