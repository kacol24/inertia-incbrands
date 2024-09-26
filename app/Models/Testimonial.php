<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Testimonial extends Model
{
    use Sushi;

    protected $rows = [
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-7.jpeg',
            'title'      => 'Vicky Shu',
        ],
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-8.jpeg',
            'title'      => 'Chef Arnold & Tiffany',
        ],
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-9.jpeg',
            'title'      => 'Karina Salim',
        ],
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-10.jpeg',
            'title'      => 'dr. Reisa Brotoasmoro',
        ],
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-11.jpeg',
            'title'      => 'Alice Norin',
        ],
        [
            'product'    => 'babygo',
            'image_path' => 'images/babygo/Photo-12.jpeg',
            'title'      => 'Joanna Alexandra',
        ],
    ];
}
