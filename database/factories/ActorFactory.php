<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actor;


class ActorFactory extends Factory
{
    protected $model = Actor::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
        ];
    }
}
