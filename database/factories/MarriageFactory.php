<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marriage>
 */
class MarriageFactory extends Factory
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

            'marr_name' => $this->faker->unique()->name(),
            'photo'=>$this->faker->unique()->sentence(),
            'type'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(1),
            'health_status'=>$this->faker->paragraph(1),
            'age' => $this->faker->numerify('#'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'comment'=>$this->faker->sentence(1)
        ];
    }
}
