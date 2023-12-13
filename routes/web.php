<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/businesses', function () {
    return Inertia::render('Businesses');
});

Route::get('/auctions', function () {
    return Inertia::render('Auctions');
});

Route::post('/sendotp', [AuthController::class, 'emailOTP']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/business/{id}', [BusinessController::class, 'business']);

Route::middleware('auth')->group(function(){
    Route::get('/postbusiness', [BusinessController::class, 'index']);
    Route::post('/postbusiness', [BusinessController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::prefix('admin')->group(__DIR__ . '/admin.php');
