<?php

namespace Database\Factories;

use App\Models\Pelicula;
use App\Models\Director;
use Illuminate\Database\Eloquent\Factories\Factory;


class PeliculaFactory extends Factory
{

    protected $model = Pelicula::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1, 5),
            'year' => $this->faker->numberBetween(1960, 2021),
            'duration' => $this->faker->numberBetween(80, 250),
            "director_id" => Director::all()->random()->id,

        ];
    }
}
