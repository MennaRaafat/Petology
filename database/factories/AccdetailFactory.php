<?php

namespace Database\Factories;

use App\Models\Accessory;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accdetail>
 */
class AccdetailFactory extends Factory
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

            'order_qty' => $this->faker->randomDigit(),
            'aid'=>Accessory::pluck('accessories_id')->random(),
            'oid'=>Order::pluck('order_id')->random(),
        ];
    }
}
