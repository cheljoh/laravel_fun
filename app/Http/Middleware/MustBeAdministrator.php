<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        $user = $request->user();

        if ($user && $user->name == "Admin"){ //in real life, prolly have isAdmin method
          return $next($request); //if user is admin, then pass on to the next request
        }

        abort(404, 'No way.');
    }
}
