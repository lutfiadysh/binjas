<?php

namespace App\Http\Middleware;

use Closure;

class RoleChecking
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
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        if($user->role == "operator") {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
