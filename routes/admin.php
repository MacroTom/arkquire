<?php

use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::post('/login', function(){});

Route::get('/dashboard', function(){
    return Inertia::render('Admin/Dashboard');
});

// User routes
Route::get('/users', [UserController::class, 'index']);

// Business routes
Route::get('/businesses', [BusinessController::class, 'index']);
