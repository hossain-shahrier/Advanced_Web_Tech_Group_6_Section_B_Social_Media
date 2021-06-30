<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class messagecontroller extends Controller
{
   public function index(){
       return view('business.message');
   }

   public function sendmessage(Request $req){
    Nexmo::message()->send([
        'to'   => 'sms','$req->mobilenumber',
        'from' => '01787907892',
        'text' => 'Sms send successfull'
    ]);
     
    $req->session()->flash('mobile_message','Message sent successfully ');
    return redirect('/business/message');


   }
}
