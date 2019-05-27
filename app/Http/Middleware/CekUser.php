<?php
namespace App\Http\Middleware;

use Closuer;
use Illuminate\Support\Facades\Auth as Auth;

/**
 * 
 */
class CekUser
{
    public function handle($request, Closure $next, $level)
    {
    	$user = Auth::user();
        if ($user && $user->level != $level) {
            return redirect('/');
        }

        else return $next($request);
    }
}