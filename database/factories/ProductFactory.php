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
    public function definition(): array
    {
        return [
            'name'=> $this->sentence(),
            'description'=>$this->faker->sentences(rand(1,3),true),
            'image'=>$this->faker->imageurl(),
            'price'=>rand(1000,15000),
            'active'=>$this->boolean(80)
        ];
    }
}
