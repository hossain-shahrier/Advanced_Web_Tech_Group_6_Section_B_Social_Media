<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class b_home_controller extends Controller
{
    public function home(){
        return view('business.home');
    }
}
