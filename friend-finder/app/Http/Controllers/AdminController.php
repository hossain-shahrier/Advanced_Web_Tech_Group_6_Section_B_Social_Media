<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req)
    {

        $email = session()->get('email');
        $password = session()->get('password');
        $admin = User::where('email', $email)->where('password', $password)->first();
        if ($admin) {
            if ($admin['type'] == "Admin" || "admin") {
                session()->put('username', $admin['user_name']);
                $data = DB::table('users')->whereNotIn('id', [1])->get();
                return view('admin.home')->with('email', $email)->with('data', $data);
            }
        } else {
            return redirect('/login');
        }
    }
    public function show()
    {
        $data  = DB::table('communities')->get();
        return view('admin.community')->with('data', $data);
    }
    public function verify($id)
    {
        $community = Community::find($id);
        if ($community->verified == 0) {
            $community->verified++;
            $community->status =  "Not verified";
            $community->save();
            return redirect()->route('admin.home');
        } else {
            $community->verified--;
            $community->status =  "verified";
            $community->save();
            return redirect()->route('admin.home');
        }
    }
    public function community()
    {
    }
}
