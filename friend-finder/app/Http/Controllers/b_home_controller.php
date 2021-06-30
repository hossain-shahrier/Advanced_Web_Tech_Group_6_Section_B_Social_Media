<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class b_home_controller extends Controller
{
    public function home(Request $req){
      
        $req->session()->put('uname',$req->uname);
        return view('business.home');
    }
}
