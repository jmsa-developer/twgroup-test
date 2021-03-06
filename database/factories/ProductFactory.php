<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'invoice_id' =>$this->faker->unique(5)->numberBetween(1, Invoice::count()),
            'name' => $this->faker->company(),
            'quantity' => $this->faker->numberBetween(1,120),
            'price' => $this->faker->randomFloat(2,1,5000)
        ];
    }


}
