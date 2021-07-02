<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRequest;
use App\Http\Requests\SendMessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store message a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function messageIndex($id)
    {
        $users = User::find($id);

        return view('admin.sendmessage')->with('users', $users);
    }
    public function message(SendMessageRequest $request, $id)
    {
        $user = User::find($id);
        $receiver = Message::where('email', $user->email)->first();
        $receiver->message = $request->message;
        $receiver->save();
        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $user = User::find($id);
        $user->user_name = $request->username;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->type = $request->type;
        $user->save();
        return redirect()->route('admin.home');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.home');
    }
    public function action($id)
    {
        $user = User::find($id);
        if ($user->banned == 0) {
            $user->banned++;
            $user->status = "banned";
            $user->save();
            return redirect()->route('admin.home');
        } else {
            $user->banned--;
            $user->status = "active";
            $user->save();
            return redirect()->route('admin.home');
        }
    }
}
