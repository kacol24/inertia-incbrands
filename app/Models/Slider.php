<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Slider extends Model
{
    use Sushi;

    protected $rows = [
        [
            'image_path' => 'images/banners/Banner-BabyGo-2.jpeg',
        ],
        [
            'image_path' => 'images/banners/Banner-Pureco.jpeg',
        ],
        [
            'image_path' => 'images/banners/nuudo-img.jpeg',
        ],
    ];
}
