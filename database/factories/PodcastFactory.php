<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Podcast;
use Faker\Generator as Faker;

$factory->define(Podcast::class, function (Faker $faker) {
    return [
        'titulo'    =>  $faker->sentence(4),
        'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
        'miniatura' =>  'https://picsum.photos/seed/picsum/200/200',
        'descricao' =>  $faker->paragraph(10),
        'video' =>  'https://player.vimeo.com/video/357463901',
        'audio' =>  asset('storage/assets/podcast.mp3'),
        'created_at'    =>  $faker->time('Y-m-d'),
        'updated_at'    =>  $faker->time('Y-m-d')
    ];
});
