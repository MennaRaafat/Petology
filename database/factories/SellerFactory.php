<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
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
            'seller_name' => $this->faker->name(20),
            'logo'=>$this->faker->paragraph(1),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => $this->faker->sentence(1),
            'remember_token' => Str::random(10),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'role' =>$this->faker->randomElement(['Seller','seller']),


        ];
    }
}
