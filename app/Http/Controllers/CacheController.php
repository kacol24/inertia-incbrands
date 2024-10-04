<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Litespeed\LSCache\LSCache;

class CacheController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        LSCache::purgeAll();

        return 'Cache cleared';
    }
}
