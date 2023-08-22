<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->name,
            "price"=>$this->faker->numberBetween(100,1000),
            "category_id"=>$this->faker->numberBetween(1,8),
            "description"=>$this->faker->text,
            "created_by"=>1,
        ];
    }
}
