<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
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
            'dr_name' => $this->faker->unique()->name(),
            'age' => $this->faker->numerify('##'),
            'phone' => $this->faker->numerify('###########'),
            'rate' =>$this->faker ->unique()->randomFloat(1, 0, 5),
            'price' =>$this->faker->unique()->randomFloat(3, 1, 200),
            'photo'=>$this->faker->unique()->sentence(),
            'description'=>$this->faker->unique()->paragraph(1),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => $this->faker->sentence(1),
            'role' =>$this->faker->randomElement(['Doctor','doctor']),

        ];
    }
}
