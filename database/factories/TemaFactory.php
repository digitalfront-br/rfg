<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tema;
use Faker\Generator as Faker;

$factory->define(Tema::class, function (Faker $faker) {
    return [
        'tema'    =>  $faker->sentence(4),
        'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
        'descricao' =>  $faker->paragraph(10),
    ];
});
