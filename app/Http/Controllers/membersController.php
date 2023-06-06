<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function register()
    {
        return view('members.register');
    }

    public function login()
    {
        return view('members.login');
    }

    public function forgetPassword()
    {
        return view('members.forgetPassword');
    }

    public function loggedIn(request $request)
    {
        echo "<h1> Logged in user's info</h1>";
        echo '<br> Email : '.$request->post('email');
        echo '<br> Password : '.$request->post('password');
    }
}
