<?php

namespace Database\Factories;

use App\Models\Accessory;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Acc_AddedFactory extends Factory
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
            'aid'=>Accessory::pluck('accessories_id')->random(),
            'sid'=>Seller::pluck('seller_id')->random(),
        ];
    }
}
