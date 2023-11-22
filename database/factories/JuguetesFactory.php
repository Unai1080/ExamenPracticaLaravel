<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Juguetes;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juguetes>
 */
class JuguetesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'izena' => $this->faker->name() ,
            'deskripzioa'=>$this->faker->text(),
            'stock' => random_int(0,1000),
            'hasieraData' => $this->faker->date(),
        ];
    }
}
