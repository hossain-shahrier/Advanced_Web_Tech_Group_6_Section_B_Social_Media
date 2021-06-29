<?php

namespace App\Http\Controllers;

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
    }
}
