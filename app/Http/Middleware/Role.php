<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
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
        // if(auth()->user()->role == 1) {
        //     return $next($request);
        // }elseif(auth()->user()->role == 0){
        //     return back();
        // }else{
        //     return redirect('login')->with('error', "Anda Tidak Dapat Mengakses");
        // }

        if(Auth::check()) {
            if(auth()->user()->role == 1) {
                return $next($request);
            }
            return redirect('/admin')->withToastWarning('Anda tidak dapat mengakses halaman!');
        } else {
            return redirect('login')->withToastWarning('Anda harus Login!');
        }
    }
}
