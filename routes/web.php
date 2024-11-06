<?php

use App\Http\Controllers\CacheController;
use Illuminate\Support\Facades\Route;

Route::get('purge', CacheController::class)
     ->middleware('lscache:no-cache');
