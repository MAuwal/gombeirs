<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateInterswitchSignature
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Retrieve the credentials from your environment or configuration
       $expectedUsername = env('INTERSWITCH_API_USERNAME');
       $expectedPassword = env('INTERSWITCH_API_PASSWORD');
       $expectedSignature = env('INTERSWITCH_API_SIGNATURE');

       // Retrieve the credentials from the request headers
       $incomingUsername = $request->header('Username');
       $incomingPassword = $request->header('Password');
       $incomingSignature = $request->header('Signature');

       // Manually compare the credentials
       if ($incomingUsername !== $expectedUsername ||
           $incomingPassword !== $expectedPassword ||
           $incomingSignature !== $expectedSignature) {
           return response()->json(['error' => 'Unauthorized'], 401);
       }

       return $next($request);
    }
}
