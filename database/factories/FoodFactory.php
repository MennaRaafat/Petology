<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'food_name' => $this->faker->unique()->name(),
            'expire_date'=>now(),
            'price'=>$this->faker->randomFloat(3,80,1000),
            'photo'=>$this->faker->paragraph(1),
            'type'=>$this->faker->paragraph(1),
        ];
    }
}
