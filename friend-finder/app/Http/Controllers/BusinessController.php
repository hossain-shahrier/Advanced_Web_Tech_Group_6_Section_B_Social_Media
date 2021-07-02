<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRequest;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = session()->get('email');
        $password = session()->get('password');
        $admin = User::where('email', $email)->where('password', $password)->first();
        if ($admin) {
            if ($admin['type'] == "Admin" || "admin") {
                session()->put('username', $admin['user_name']);
                $data = DB::table('businesses')->get();
                return view('admin.businesslist')->with('email', $email)->with('data', $data);
            }
        } else {
            return redirect('/login');
        }
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::find($id);
        return view('admin.businessEdit')->with('business', $business);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessRequest $request, $id)
    {
        $business = Business::find($id);
        $business->business_name = $request->business_name;
        $business->business_type = $request->business_type;
        $business->location = $request->location;
        $business->save();
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::destroy($id);
        return redirect()->route('admin.home');
    }
}
