<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(ActorSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(PeliculaSeeder::class);
        $this->call(ActorsMoviesSeeder::class);
        $this->call(UserSeeder::class);
    }
}
