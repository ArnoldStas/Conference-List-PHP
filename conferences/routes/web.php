<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('conferences.index');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/**
 * Conference Routes
 * RESTful resource routes for conferences CRUD operations
 *
 * Generates the following routes:
 * - GET    /conferences           -> index()   - list all conferences (public)
 * - GET    /conferences/create    -> create()  - show create form (auth required)
 * - POST   /conferences           -> store()   - save new conference (auth required)
 * - GET    /conferences/{id}      -> show()    - view single conference (public)
 * - GET    /conferences/{id}/edit -> edit()    - show edit form (auth required)
 * - PUT    /conferences/{id}      -> update()  - save edited conference (auth required)
 * - DELETE /conferences/{id}      -> destroy() - delete conference (auth required)
 *
 */

Route::resource('conferences', ConferenceController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::resource('conferences', ConferenceController::class)
    ->only(['index', 'show']);
