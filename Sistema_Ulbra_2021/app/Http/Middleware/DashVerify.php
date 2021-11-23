<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->type === 1){
            return view('dashboard_company');
        }elseif(Auth::user()->type === 3){
            return view('dashboard_adm');
        }
        else{
            return view('dashboard');
        }
       
    }
}
