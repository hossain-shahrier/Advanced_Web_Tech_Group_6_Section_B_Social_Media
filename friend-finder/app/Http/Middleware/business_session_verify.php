<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class business_session_verify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
    if($req->session()->has('uname','password'))
    {
       //session or cookies
       return $next($req);
    }

    
    else
    $req->session()->flash('mssg','invalid request');
    return redirect('/business/login');
   }

      
       
      
}


