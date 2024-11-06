<?php

use App\Http\Controllers\CacheController;
use Illuminate\Support\Facades\Route;

Route::get('lscache-purge', CacheController::class)
     ->middleware('lscache:no-cache');
