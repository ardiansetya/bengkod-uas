<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect('/denied')->with('error', 'Anda harus login terlebih dahulu');
        }
        if (auth()->user()->role !== $role) {
            return redirect('/denied')->with('error', 'Anda harus login sebagai ' . $role);
        }

        return $next($request);
    }
}
