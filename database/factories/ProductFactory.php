<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'title' => $product_name,
            'slug' => $slug,
            'details' => $this->faker->text(200),
            'active' => 1,
            'quantity' => $this->faker->numberBetween(1,150),
            'reqular_price'=> $this->faker->numberBetween(10,500),
            'main_image' => 'prod_' . $this->faker->unique()->numberBetween(1,22) .'.jpg',
            'category_id'=> $this->faker->numberBetween(1,5),
            'images' => 1

        ];
    }
}

