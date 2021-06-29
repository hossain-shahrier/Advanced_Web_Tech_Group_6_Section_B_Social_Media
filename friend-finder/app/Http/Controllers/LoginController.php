<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
        $user = User::where('user_name', $req->username)
            ->where('password', $req->password)
            ->first();

        if ($user) {
            if ($user->type == 'User' || $user->type == 'Job' || $user->type == 'Business') {
                $req->session()->put('username', $user->username);
                $req->session()->put('email', $user->email);
                $req->session()->put('type', $user->type);
                return redirect('/home');
            } elseif ($user->type == 'Admin' || 'admin') {


                $req->session()->put('email', $user->email);
                $req->session()->put('password', $user->password);
                $req->session()->put('type', $user->type);
                return redirect('admin/home');
            } else {
                $req->session()->flash('msg', 'invaild username or password');
                return redirect('/');
            }
        } else {
            $req->session()->flash('msg', 'User does not exist');
            return redirect('/');
        }
    }
}
