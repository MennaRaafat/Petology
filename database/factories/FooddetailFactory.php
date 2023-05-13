<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fooddetail>
 */
class FooddetailFactory extends Factory
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
            'ordered_qty' => $this->faker->randomDigit(),
            'fid'=>Food::pluck('food_id')->random(),
            'oid'=>Order::pluck('order_id')->random(),
        ];
    }
}
