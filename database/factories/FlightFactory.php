<?php

namespace Database\Factories;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
	protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
	'id' => $this->faker->year(),
     'link' => $this->faker->url(),
     'menu' => $this->faker->name(),
     'created_at' => $this->faker->dateTimeAD(),
     'updated_at' => $this->faker->dateTimeAD()//
        ];
    }
}
