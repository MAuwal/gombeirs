<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InterswitchIPWhitelist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Define the list of whitelisted IP addresses
        $whitelistedIps = [
            '41.223.145.174',
            '154.72.34.174',
            // Add other IPs as needed
        ];
        
        // Check if the incoming request IP is in the whitelist
        if (!in_array($request->ip(), $whitelistedIps)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
