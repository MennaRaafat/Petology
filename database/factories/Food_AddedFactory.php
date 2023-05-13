<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Food_AddedFactory extends Factory
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

            'fid'=>Food::pluck('food_id')->random(),
            'sid'=>Seller::pluck('seller_id')->random(),
        ];
    }
}
