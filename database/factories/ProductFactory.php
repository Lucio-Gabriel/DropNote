<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'product_name' => $this->faker->word(),
            'product_type' => $this->faker->randomElement(['Casa', 'Quarto', 'Escritorio', 'Cozinha']),
            'description' => $this->faker->sentence(10),
            'niche' => $this->faker->randomElement(['Tecnologia', 'Moda', 'Saúde', 'Educação']),
            'url' => $this->faker->url(),
        ];
    }
}
