<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $prodect_name = $this->faker->unique()->words($nb=4,$asText = True);
        $slug = Str::slug($prodect_name);

        return [
            'name' => $prodect_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description'=> $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,500),
            'SKU'=> 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock status'=> 'instock',
            'qauntity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_'.$this->faker->unique()->numberBetween(1,22).'.JPG',
            'category_id'=> $this->faker->numberbetween(1,5)

        ];
    }
}
