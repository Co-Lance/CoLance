<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleRedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role == $role) {
            // User's role matches the specified role, so redirect accordingly
            if ($role === 'admin') {
                return redirect()->route('categories.index');
            } else {
                return redirect()->route('products.index');
            }
        }
        return $next($request);
    }
}
