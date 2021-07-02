<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;

class RegiController extends Controller
{
    public function index()
    {
        // return view('regi.index');
        echo "Hello";
    }

    public function create(RegistrationRequest $req)
    {
        if ($req->password == $req->cpassword) {
            $u = User::where('username', $req->username)
                ->where('email', $req->email)
                ->first();
            if ($u) {
                $req->session()->flash('msg', 'user already exists');
                return redirect('/registration');
            } else {

                if ($req->hasFile('profile_pic')) {

                    $file = $req->file('profile_pic');
                    if ($file->move('upload', $file->getClientOriginalName())) {
                        $user = new User;
                        $user->name = $req->name;
                        $user->username = $req->username;
                        $user->email = $req->email;
                        $user->password = $req->password;
                        $user->phone = $req->phone;
                        $user->profile_pic = $file->getClientOriginalName();
                        $user->gender = $req->gender;
                        $user->type = $req->type;
                        $user->status = 'Active';
                        $user->save();
                        return redirect('/');
                    } else {
                        echo "error";
                    }
                } else {
                    $user = new User;
                    $user->name = $req->name;
                    $user->username = $req->username;
                    $user->email = $req->email;
                    $user->password = $req->password;
                    $user->phone = $req->phone;
                    $user->profile_pic = 'default.jpeg';
                    $user->gender = $req->gender;
                    $user->type = $req->type;
                    $user->status = 'Active';
                    $user->save();
                    return redirect('/');
                }
            }
        } else {
            $req->session()->flash('msg', 'password and confirm password doesnt match');
            return redirect('/registration');
        }
    }
}
