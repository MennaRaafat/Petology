<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Marriage;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'us_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => $this->faker->sentence(1),
            'age' => $this->faker->numerify('##'),
            'phone' => $this->faker->numerify('###########'),
            'gender' => $this->faker->randomElement(['male', 'female']),

            'm_id'=>Marriage::pluck('marriage_id')->random(),
            'dr_id'=>Doctor::pluck('doctor_id')->random(),
            'tr_id'=>Trainer::pluck('trainer_id')->random(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
