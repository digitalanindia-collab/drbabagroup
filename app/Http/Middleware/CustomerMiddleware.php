<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth()->user();
        if(!$user) {
            redirect('/signup');
        }
       if($user->role !== "2") {
         echo "admin";
 return  redirect('/admin');
       } else {
        // echo "customer";
       }

        return $next($request);
    }
}
