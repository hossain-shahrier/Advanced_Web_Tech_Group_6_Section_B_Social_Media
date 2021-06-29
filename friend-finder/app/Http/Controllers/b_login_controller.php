<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class b_login_controller extends Controller
{
    public function login(){
        return view('business.login');
    }
}
