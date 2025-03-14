<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(){
        return view('registration');
    }

    public function sign(){
        return view('sign');
    }
}
