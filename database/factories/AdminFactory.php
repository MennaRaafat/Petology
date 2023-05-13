<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
            'ad_name' => $this->faker->name(20),

            'email' => $this->faker->unique()->safeEmail(),

            'password' => $this->faker->sentence(1),

            'role' =>'Adminstrator',

            'age' => $this->faker->numerify('##'),

            'gender' => $this->faker->randomElement(['male', 'female']),

            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            
            'dr_id'=>Doctor::pluck('doctor_id')->random(),
            'tr_id'=>Trainer::pluck('trainer_id')->random(),

        ];
    }
}
