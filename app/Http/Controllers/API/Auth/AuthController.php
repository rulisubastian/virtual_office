<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function login($email, $password)
    {
        // Rate limiting (5 attempts per 1 minute)
        $key = 'login:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return response()->json([
                'message' => 'Too many login attempts. Please try again later.',
            ], 429);
        }

        // Find user by email or username
        $user = User::where('email', $email)
                    ->first();

        // If user not found
        if (!$user || !Hash::check($request->password, $user->password)) {
            RateLimiter::hit($key); // Increase failed attempt count
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Check if user is active
        if ($user->status !== 'active') {
            return response()->json(['message' => 'Your account is inactive.'], 403);
        }

        // Revoke old tokens for the same device
        $user->tokens()->where('name', $request->device_name)->delete();

        // Generate new token
        $token = $user->createToken($request->device_name)->plainTextToken;

        // Update last login timestamp
        $user->update(['last_login_at' => Carbon::now()]);

        // Reset rate limiter after successful login
        RateLimiter::clear($key);

        return response()->json([
            'message' => 'Login successful',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'role' => $user->role,
                'last_login_at' => $user->last_login_at,
            ]
        ], 200);
    }
}
