<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DisableTurboForAdmin
{
    /**
     * Handle an incoming request.
     *
     * Disable Turbo for admin, login, and dashboard pages
     * to avoid conflicts with admin interfaces and forms.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        
        // Check if this is an admin, login, or dashboard route
        $isAdminRoute = $request->is('admin/*') || 
                       $request->is('login') || 
                       $request->is('register') || 
                       $request->is('dashboard') ||
                       $request->is('app/*') ||
                       $request->is('password/*');
        
        // Add Turbo-Frame header to disable Turbo Drive for these routes
        if ($isAdminRoute) {
            $response->headers->set('Turbo-Visit-Control', 'reload');
        }
        
        return $response;
    }
}
