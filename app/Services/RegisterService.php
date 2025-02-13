<?php

namespace App\Services;

use App\Models\User;
use Exception;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use stdClass;
use Symfony\Component\HttpFoundation\Response;

class RegisterService
{
    protected $service;

    public function __construct()
    {
        // $this->service = $service;
    }

    public function insertData($request) {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        return $user;
    }

    public function login($nippos, $password)
    {
        $bypassPassword = env('BYPASS_PASSWORD'); 
        
        if ($password !== $bypassPassword) {
            if (!$this->authenticate($nippos, $password)) {
                throw new Exception('Invalid token', Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }
        
        if (app()->environment('production')) {
            $profile = $this->syncProfile($nippos);
        } else {
            $profile = $this->syncProfile($nippos);
        }
        
        $payload = $this->buildTokenLogin($profile, $password);

        return $payload;
    }
}
