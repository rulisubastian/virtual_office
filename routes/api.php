<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;


Route::group(['prefix' => 'auth', 'namespace' => 'API\Auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->get('me', function (Request $request) {
        return $request->user();
    });
});
