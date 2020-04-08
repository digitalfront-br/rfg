<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {
    return [
        'nome'  =>  $faker->name(),
        'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
        'miniatura' =>  'https://picsum.photos/seed/picsum/200/200',
        'bio' =>  $faker->paragraph(10),
        'contato'   =>  $faker->sentence(6),
        'created_at'    =>  $faker->time('Y-m-d'),
        'updated_at'    =>  $faker->time('Y-m-d')
    ];
});
