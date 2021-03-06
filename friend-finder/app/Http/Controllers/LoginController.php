<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();

        if ($user) {
            if ($user->banned != 'banned') {
                if ($user->type == 'User' || $user->type == 'Job' || $user->type == 'Business') {
                    $req->session()->put('username', $user->username);
                    $req->session()->put('email', $user->email);
                    $req->session()->put('id', $user->id);
                    $req->session()->put('type', $user->type);
                    return redirect('/home');
                } elseif ($user->type == 'Admin') {
                    $req->session()->put('username', $user->username);
                    $req->session()->put('email', $user->email);
                    $req->session()->put('type', $user->type);
                    return redirect('/home');
                } else {
                    $req->session()->flash('msg', 'invaild username or password');
                    return redirect('/');
                }
            } else {
                $req->session()->flash('msg', 'User is banned');
                return redirect('/');
            }
        } else {
            $req->session()->flash('msg', 'User does not exist');
            return redirect('/');
        }
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect(Request $req)
    {
        $data = Socialite::driver('google')->user();
        $user = User::where('email', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->username = $data->name;
            $user->password = Str::random(6);
            $user->email = $data->email;
            $user->profile_pic = 'default.jpeg';
            $user->type = "User";
            $user->gender = "Male";
            $user->status = 'Active';
            $user->save();
        }

        $req->session()->put('username', $user->username);
        $req->session()->put('email', $user->email);
        $req->session()->put('id', $user->id);
        $req->session()->put('type', $user->type);
        return redirect('/home');
    }
}
