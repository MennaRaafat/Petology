<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'amount' => $this->faker->randomFloat(4,100,4000),
            'status' => $this->faker->randomElement(['yes','no']),
            'ord_id' =>Order::pluck('order_id')->random(),
        ];
    }
}
