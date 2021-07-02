<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Events\Message;
use Illuminate\Http\Response;

class UserMessageController extends Controller
{
    public function ChatBox(Request $req)
    {
        $user = User::where('username', $req->session()->get('username'))
            ->where('email', $req->session()->get('email'))
            ->first();
        return view('user.message')
            ->with('username', $user->username);
    }

    public function Send(Request $request)
    {
        event(
            new Message(
                $request->input('username'),
                $request->input('message')
            )
        );
        return ["success" => true];
    }
}
