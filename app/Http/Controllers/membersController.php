<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function register()
    {
        return view('members.register');
    }
}
