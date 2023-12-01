<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::post('/login', function(){});

Route::get('/dashboard', function(){
    return Inertia::render('Admin/Dashboard');
});
