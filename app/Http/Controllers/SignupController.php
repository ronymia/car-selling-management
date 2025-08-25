<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function create()
    {
        // Return the signup view
        return view('auth.signup');
    }
}
