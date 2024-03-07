<?php

namespace Database\Factories;
use App\Models\Urls;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class UrlsFactory extends Factory
{
	protected $model = Urls::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
	'id' => $this->faker->year(),
     'href' => $this->faker->url(),
     'page' => $this->faker->name(),
     'created_at' => $this->faker->dateTimeAD(),
     
     'updated_at' => NULL,
     'express_time' => NULL
        ];
    }
}
