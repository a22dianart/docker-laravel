<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (Auth::user()->rol !== $role) {
            abort(403);
        }

        return $next($request);
    }
}
