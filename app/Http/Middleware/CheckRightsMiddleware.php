<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;

class CheckRightsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->cant('admin', Role::class)) {
            return redirect()->route('index');
        }
        return $next($request);
    }
}
