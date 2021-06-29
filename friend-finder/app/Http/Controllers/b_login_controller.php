<?php

namespace App\Http\Controllers;
use App\Models\businessloginmodel;
use Illuminate\Http\Request;
use Validator;


class b_login_controller extends Controller
{
    public function login(){
        return view('business.login');
    }


    public function verify(Request $req){
        
        $validation=Validator::make($req-> all(),[
            'uname'=>'required',
            'password'=>'required'
        ]);
        if($validation->fails()) {
            return redirect('/business/login')->with('errors',$validation->errors());

        }
      
        
     $business_user=businessloginmodel::where('uname',$req->uname)
     ->where('password',$req->password)
     ->get();
     if(count($business_user) >0){
        $req->session()->put('uname',$req->uname);
        $req->session()->put('password',$req->password);
        return redirect('/business/home');
     }

        
     else 
       
       $req->session()->flash('mssg','invalid User ');
       return redirect('/business/login');
    }
       
}
  

    

