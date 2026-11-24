<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     *  protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'photo',    
        'discount',
        'stock_quantity',
        'new',
        'category_id',
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'category_id' => $this->faker->numberBetween(1, 8), // Assurez-vous que les catégories existent
            'photo' => $this->faker->imageUrl(),
            'discount' => $this->faker->numberBetween(0, 50),
            'stock_quantity' => $this->faker->numberBetween(0, 100),
            'new' => $this->faker->boolean(),
        ];
    }
}
