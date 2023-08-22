<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "product_id"=>$this->faker->numberBetween(1,100),
            "image"=>$this->faker->imageUrl(640,480),
            "is_main"=>$this->faker->numberBetween(0,1),
        ];
    }
}
