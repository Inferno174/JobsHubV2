<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type):Response
    {
        if(Auth::check())
        {
            if (auth()->user()->type == $type) {
                return $next($request);
            }
            return response()->json([
                'error' => 'You Dont Have Permission'
            ], 403);
        }

        else
        {
            return redirect()->route('register');
        }

    }

}
