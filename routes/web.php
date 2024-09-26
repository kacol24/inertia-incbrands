<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/babygoinc', [PageController::class, 'babygo'])
    ->name('static.babygo');
