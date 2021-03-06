<?php 
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AuthUser {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::User() )
        {
            return $next($request);
        }

        return redirect()->route('login');

    }

}

?>