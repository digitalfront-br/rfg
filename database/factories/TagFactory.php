<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'tag'    =>  $faker->sentence(4),
        'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
        'descricao' =>  $faker->paragraph(10),
    ];
});
