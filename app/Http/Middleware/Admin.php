<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(auth()->user()->isAdmin() === true){
                return $next($request);
            }
        }    

        return redirect('login')->with('error', 'Авторизуйтесь под администратором');
    }
}
