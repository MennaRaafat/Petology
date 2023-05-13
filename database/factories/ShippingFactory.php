<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
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

            'ship_address' => $this->faker->address(),
            'ship_status' => $this->faker->randomElement(['yes','no']),
            'oid' =>Order::pluck('order_id')->random(),


        ];
    }
}
