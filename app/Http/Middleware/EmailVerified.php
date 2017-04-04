<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class EmailVerified
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
        $user = Auth::user();
        if($user)
        {
            if(!$user->verified)
            {
                return redirect('/auth/welcome');
            }
            if($user->actived == NULL)
            {
                return redirect('/auth/choose');
            }
        }
        return $next($request);
    }
}
