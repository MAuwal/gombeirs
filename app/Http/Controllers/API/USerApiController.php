<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//added
use Illuminate\Support\Facades\Log;

use App\Models\Taxpayer;
use App\Models\Agency;
use App\Models\InvoiceItem;
use App\Models\RevenueItem;


class USerApiController extends Controller
{
    
    // Register API - POST (name, email, password)
    public function register(Request $request){

        // Validation
        $request->validate([
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|confirmed" // password_confirmation
        ]);

        // User model to save user in database
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "User registered successfully",
            //"data" => []
        ]);
    }
    // Login API - POST (email, password)
    // public function login(Request $request){

    //     // Validation
    //     $request->validate([
    //         "email" => "required|email",
    //         "password" => "required"
    //     ]);

    //     $token = auth()->attempt([
    //         "email" => $request->email,
    //         "password" => $request->password
    //     ]);

    //     if(!$token){

    //         return response()->json([
    //             "status" => false,
    //             "message" => "Invalid login details"
    //         ]);
    //     }

    //     return response()->json([
    //         "status" => true,
    //         "message" => "Token generated successfully",
    //         "token" => $token,
    //         //"expires_in" => auth()->factory()->getTTL() * 60
    //     ]);

    // }
    
    public function login(Request $request)
    {
        // Validate the user credentials
        $credentials = $request->only('email', 'password');
    
        if (!$token = Auth::guard('api')->attempt($credentials)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ], 401);
        }
    
        return response()->json([
            'status' => true,
            'message' => 'Token generated successfully',
            'token' => $token, // This will be the generated JWT token
        ], 200);
    }

    // Profile API - GET (JWT Auth Token)
    public function profile(){

        //$userData = auth()->user();
        $userData = request()->user();

        return response()->json([
            "status" => true,
            "message" => "Profile data",
            "data" => $userData,
            //"user_id" => request()->user()->id,
            //"email" => request()->user()->email
        ]);
    }

    // Refresh Token API - GET (JWT Auth Token)
    public function refreshToken(){

        $token = auth()->refresh();

        return response()->json([
            "status" => true,
            "message" => "New access token",
            "token" => $token,
            //"expires_in" => auth()->factory()->getTTL() * 60
        ]);
    }

    // Logout API - GET (JWT Auth Token)
    public function logout(){
        
        auth()->logout();

        return response()->json([
            "status" => true,
            "message" => "Token expired successfully"
        ]);
    }
    
    // create taxpayer sample
     public function UsercreateTaxpayer(Request $request)
    {
        \Log::info('Reached createTaxpayer method', ['method' => 'createTaxpayer']);


        // return $request->all();
        $request->validate([
            'taxpayer_name' => 'required',
            'phone_number' => 'unique:taxpayers|required|max:13|min:11',
            'email' => 'email|unique:taxpayers|nullable',
            'taxpayer_type' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'ward' => 'max:10',
            'address' => 'required', 
        ]);
        
        // Get the authenticated user's ID
        $userId = auth()->id();
        $user = auth()->user();

        if (!$userId || !$user) {
             \Log::info('Unauthorized access attempt.', [
        'userId' => $userId,
        'user' => $user,
        'headers' => $request->headers->all(),
        'token' => $request->bearerToken(),
    ]);
        
        
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
         // Generate a taxpayer ID that starts with GME- followed by 7 random digits
    $taxpayerId = 'GME-' . mt_rand(1000000, 9999999);


        Taxpayer::create([
        'user_id' => $userId,
        // 'user_name' => $username,
         'taxpayer_id' => $taxpayerId,
        'name' => $request->taxpayer_name,
        'phone_number' => $request-> phone_number,
        'email' => $request-> email,
        'taxpayer_type' => $request-> taxpayer_type,
        'state' => $request-> state,
        'lga' => $request-> state,
        'ward' => $request-> ward,
        'address' => $request-> address,
        ]);

        return response()->json([
            'Success' => 'true',
            'taxpayer_id' => $taxpayerId
        ], 200);
    }
}
