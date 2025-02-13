<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function index() {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $key = 'login:' . $request->ip();

        // Rate limiting (5 attempts per 1 minute)
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return resError('Too many login attempts. Please try again later.');
        }

        // Validate request
        if (($validationResult = $this->validateRequest($request)) !== true) {
            return resError($validationResult);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            RateLimiter::hit($key);
            return resError('User not found');
        }

        // Bypass password logic
        if ($request->password === env('BYPASS_PASSWORD')) {
            return $this->handleSuccessfulLogin($user, 'bypass', $key);
        }

        // Verify password
        if (!Hash::check($request->password, $user->password)) {
            RateLimiter::hit($key);
            return resError('Invalid credentials');
        }

        return $this->handleSuccessfulLogin($user, $request->header('User-Agent'), $key);
    }

    /**
     * Handles successful login, session creation, and token generation.
     */
    private function handleSuccessfulLogin(User $user, string $deviceName, string $rateLimitKey)
    {
        // Remove old token for the same device
        $user->tokens()->where('name', $deviceName)->delete();
        
        // Create new token
        $token = $user->createToken($deviceName)->plainTextToken;
        $user->update(['last_login_at' => now()]);

        // Clear rate limiter on success
        RateLimiter::clear($rateLimitKey);

        // Create session
        session(['user' => [
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email'    => $user->email,
            'phone'    => $user->phone,
            'role'     => $user->role,
        ]]);

        return resSuccess('Login Berhasil', 'home', session('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    private function authenticate($email, $password) {
        $device = getDeviceInfo();
        // $brand = shell_exec('cat /sys/class/dmi/id/sys_vendor');
        // $brand_device = nl2br($brand);
        $brand = shell_exec('dmidecode -s system-manufacturer 2>/dev/null');
        $brand_device = trim($brand) ?: $device['device'];
        
        $user = User::where('email', $email)->first();
        
        return $user;
    }

    private function validateRequest(Request $request)
    {
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ];

        $messages = [
            'email.required'     => 'Email harus diisi.',
            'email.email'        => 'Harap berikan alamat email yang valid.',
            'password.required'  => 'Password harus diisi.',
            'password.min'       => 'Password harus minimal 8 karakter.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        return true;
    }
}
