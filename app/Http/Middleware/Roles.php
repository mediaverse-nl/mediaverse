<?php

namespace App\Http\Middleware;

use Closure;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (auth()->check() && auth()->user()->hasRole($roles)) {
            return $next($request);
        }

        \Session::flash('error_message','je hebt geen toegang tot deze URL pagina.');

        return redirect('/dashboard');
    }
}
