<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entidade;
use Faker\Generator as Faker;

$factory->define(Entidade::class, function (Faker $faker) {
    $tipo = $faker->numberBetween(1,3);
    // 1-autor | 2-video | 3-podcast
    if($tipo === 1){
        return [
            'titulo'    =>  $faker->sentence(4),
            'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
            'miniatura' =>  'https://picsum.photos/seed/picsum/200/200',
            'descricao' =>  $faker->paragraph(10),
            'contatos'  =>  $faker->paragraph(2),
            'tipo'  =>  $tipo,
            'created_at'    =>  $faker->time('Y-m-d'),
            'updated_at'    =>  $faker->time('Y-m-d')
        ];
    } else if($tipo === 2){
        return [
            'titulo'    =>  $faker->sentence(4),
            'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
            'miniatura' =>  'https://picsum.photos/seed/picsum/200/200',
            'descricao' =>  $faker->paragraph(10),
            'video' =>  'https://player.vimeo.com/video/357463901',
            'tipo'  =>  $tipo,
            'created_at'    =>  $faker->time('Y-m-d'),
            'updated_at'    =>  $faker->time('Y-m-d')
        ];
    } else {
        return [
            'titulo'    =>  $faker->sentence(4),
            'capa'  =>  'https://picsum.photos/seed/picsum/800/800',
            'miniatura' =>  'https://picsum.photos/seed/picsum/200/200',
            'descricao' =>  $faker->paragraph(10),
            'video' =>  'https://player.vimeo.com/video/357463901',
            'audio' =>  asset('storage/assets/podcast.mp3'),
            'tipo'  =>  $tipo,
            'created_at'    =>  $faker->time('Y-m-d'),
            'updated_at'    =>  $faker->time('Y-m-d')
        ];
    }
});
