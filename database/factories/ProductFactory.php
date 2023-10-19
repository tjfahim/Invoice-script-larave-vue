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
            'item_code'=>'IC-1000'.rand(20,500),
            'description'=>'Product Name'.rand(20,500),
            'unit_price'=>mt_rand(100,1000),
        ];
    }
}
