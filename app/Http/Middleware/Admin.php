<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->user() != null){
            if (Auth::guard('admin')->user()->role == 'Superadmin'){
                return $next($request);

            }else{
                return redirect()->route('adminlogin')->with('errors', 'No access');
            }
        }
        return redirect()->route('adminlogin')->with('errors', 'No access');
    
    }
}
