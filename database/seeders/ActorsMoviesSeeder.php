<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Pelicula;

class ActorsMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Pelicula::all();

        // Populate the pivot table
        Actor::all()->each(function ($actor) use ($movies) {
            $actor->pelicula()->attach(
                $movies->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
