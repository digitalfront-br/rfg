<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(PodcastSeeder::class);
    }
}
