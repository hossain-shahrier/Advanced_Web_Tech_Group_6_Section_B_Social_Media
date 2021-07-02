<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Req;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();

        return view('user.index')
            ->with('user', $user);
    }
}
