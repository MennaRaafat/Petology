<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accessory>
 */
class AccessoryFactory extends Factory
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

            'acc_name' => $this->faker->unique()->name(),
            'rate' =>$this->faker ->unique()->randomFloat(1, 0, 5),
            'price'=>$this->faker->randomFloat(3,80,1000),
            'photo'=>$this->faker->paragraph(1),
            'type'=>$this->faker->paragraph(1),
        ];
    }
}
