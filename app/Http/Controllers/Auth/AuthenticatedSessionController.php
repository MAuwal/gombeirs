<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        addJavascriptFile('assets/js/custom/authentication/sign-in/general.js');

        return view('pages.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
     
    // public function store(LoginRequest $request)
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     $request->user()->update([
    //         'last_login_at' => Carbon::now()->toDateTimeString(),
    //         'last_login_ip' => $request->getClientIp()
    //     ]);

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }
    
    
     public function store(LoginRequest $request)
    {
        $request->authenticate();
    
        $request->session()->regenerate();
    
        // $user = Auth::user();
        // $role = $user->roles->first()->name; // Assuming the user has only one role
        
         $user = Auth::user();

        if ($user->roles->isEmpty()) {
            // Handle users without roles (e.g., redirect them to a default dashboard)
            return redirect()->route('dashboard');
        }
    
        // Debug statement to check user's role
        // Log::info('User role: ' . $role);
        $role = $user->roles->first()->name;
        
        // TO ADD OR MODIFY ROLE , GO TO MIDDLEWARE/RedirectIfAuthenticated CLASS
    
        // if ($user && $user->hasRole('Administrator')) {
        // return redirect()->route('admin.dashboard');
        // } elseif ($user && $user->hasRole('Client')) {
        //     return redirect()->route('client.dashboard');
        // }    elseif ($user && $user->hasRole('COLLECTION')) {
        //     return redirect()->route('collection.dashboard');
        // }elseif ($user && $user->hasRole('dueprocess')) {
        //     return redirect()->route('client.dueprocess');
        // }else {
        //     return redirect()->route('dashboard');
        // }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
