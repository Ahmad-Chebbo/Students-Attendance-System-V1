<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        foreach ($roles as $role){
            if($request->user()->hasRoles($role) ){
                return $next($request);
            }
        }
        return abort(403);
    }
}
