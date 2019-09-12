<?php 
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AuthAdmin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::User()->is_admin )
        {
            return $next($request);
        }

        return redirect()->route('login');

    }

}

?>