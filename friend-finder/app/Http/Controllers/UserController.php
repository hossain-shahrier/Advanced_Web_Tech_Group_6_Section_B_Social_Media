<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use App\Models\Follow;
use App\Models\Post;

class UserController extends Controller
{
    public function profile(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();
        $rand = User::where('username', '!=', $req->session()->get('username'))
            ->get();
        $post = Post::where('user_id', $req->session()->get('id'))->get();
        $follows = Follow::where('user_id', $user->id)->get();
        $followers = 0;
        foreach ($follows as $f) {
            $followers += 1;
        }
        return view('user.profile')->with('user', $user)
            ->with('followers', $followers)
            ->with('post', $post)
            ->with('rand', $rand);
    }

    public function Post(Request $req)
    {
        $post = new Post;
        $post->post = $req->post;
        $post->user_id = $req->session()->get('id');
        $post->save();
        return redirect("/profile");
    }

    public function Contact()
    {
        return view("user.contact");
    }

    public function About(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();
        $follows = Follow::where('user_id', $user->id)->get();
        $followers = 0;
        foreach ($follows as $f) {
            $followers += 1;
        }
        return view('user.about')->with('user', $user)
            ->with('followers', $followers);
    }

    public function Edit(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();
        $follows = Follow::where('user_id', $user->id)->get();
        $followers = 0;
        foreach ($follows as $f) {
            $followers += 1;
        }
        return view('user.edit')->with('user', $user)
            ->with('followers', $followers);
    }

    public function update(RegistrationRequest $req)
    {
        if ($req->password == $req->cpassword) {

            if ($req->hasFile('profile_pic')) {

                $file = $req->file('profile_pic');
                if ($file->move('upload', $file->getClientOriginalName())) {
                    $user = User::where('username', $req->username)
                        ->where('email', $req->email)
                        ->first();
                    $user->name = $req->name;
                    $user->username = $req->username;
                    $user->email = $req->email;
                    $user->password = $req->password;
                    $user->phone = $req->phone;
                    $user->profile_pic = $file->getClientOriginalName();
                    $user->save();
                    return redirect('/about');
                } else {
                    echo "error";
                }
            } else {
                $user = User::where('username', $req->username)
                    ->where('email', $req->email)
                    ->first();
                $user->name = $req->name;
                $user->username = $req->username;
                $user->email = $req->email;
                $user->password = $req->password;
                $user->phone = $req->phone;
                $user->profile_pic = 'default.jpeg';
                $user->save();
                return redirect('/about');
            }
        } else {
            $req->session()->flash('msg', 'password and confirm password doesnt match');
            return redirect('/registration');
        }
    }

    public function message(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();
        $msg = User::get();
        return view("user.message")
            ->with('user', $user)
            ->with('msg', $msg);
    }
}
