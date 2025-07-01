<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
     
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }
    
     public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
    
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                
                if ($user->roles->isEmpty()) {
                    // Handle users without roles (e.g., redirect them to a default dashboard)
                    return redirect()->route('dashboard');
                }
    
                $role = $user->roles->first()->name;
    
                // Log::info('Authenticated user: ' . $user->id);
                // Log::info('User role: ' . $role);
    
                if ($role === 'administrator') {
                    return redirect()->route('admin.dashboard');
                } elseif ($role === 'developer') {
                    return redirect()->route('client.dashboard');
                } elseif ($role === 'executive') {
                    return redirect()->route('executive.dashboard');
                } elseif ($role === 'management') {
                    return redirect()->route('management.dashboard');
                } elseif ($role === 'COLLECTION') {
                    return redirect()->route('collection.dashboard');
                } elseif ($role === 'dueprocess') {
                    return redirect()->route('client.dueprocess');
                }elseif ($role === 'GOGIS') {
                    return redirect()->route('gogis.dashboard');
                }else {
                    return redirect()->route('dashboard');
                }
            }
        }
    
        return $next($request);
    }

}
