<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(5),
            'advantages' => json_encode(["key" => "value"]),
            'datasheet' => json_encode(["key" => "value"])
        ];
    }
}
