<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\LandingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Register\RegisterController;
use App\Http\Controllers\Listing\ListingController;
use App\Http\Controllers\Booking\BookingController;


Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('signup', [RegisterController::class, 'index'])->name('signup');
Route::get('signup/register', [RegisterController::class, 'showRegisterForm'])->name('signup.register.form');
Route::post('signup/register', [RegisterController::class, 'register'])->name('signup.register');
Route::post('simpan-registrasi', [RegisterController::class, 'store'])->name('simpan-registrasi');
Route::get('sukses-registrasi', [RegisterController::class, 'show'])->name('sukses-registrasi');
Route::get('listing', [ListingController::class, 'index'])->name('listing');
Route::get('booking', [BookingController::class, 'index'])->name('booking');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'auth', 'namespace' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    // Route::middleware('auth:sanctum')->get('me', function (Request $request) {
    //     return $request->user();
    // });
});

// Route::group([ 'middleware' => 'auth:sanctum'], function () {
//     Route::post('/', [NonEmployeeController::class, 'create']);
//     Route::get('/', [NonEmployeeController::class, 'findAll']);
//     Route::get('/{id}', [NonEmployeeController::class, 'find']);
//     Route::put('/{id}', [NonEmployeeController::class, 'update']);
//     Route::delete('/{id}', [NonEmployeeController::class, 'delete']);
// });

