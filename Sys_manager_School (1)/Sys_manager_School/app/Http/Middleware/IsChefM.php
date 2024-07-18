<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsChefM
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->user_type === 'chefM') {
            return $next($request);
        }
    
        return redirect('/');
    }
}