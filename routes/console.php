<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('deploy', function (){
    $this->call('optimize:clear');
    $this->call('optimize');
    $this->call('opcache:compile', [
        '--force'
    ]);
});
