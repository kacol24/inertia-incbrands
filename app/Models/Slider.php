<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Slider extends Model
{
    use Orbital;

    protected $fillable = [
        'title',
        'image_path',
        'order_column',
    ];

    public static function schema(Blueprint $table)
    {
        $table->id();
        $table->string('title')->nullable();
        $table->string('image_path');
        $table->unsignedBigInteger('order_column')->default(0);
    }
}
