<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Seller;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
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
            'profile_name' => $this->faker->name(10),
            'dr_id'=>Doctor::pluck('doctor_id')->random(),
            'tr_id'=>Trainer::pluck('trainer_id')->random(),
            's_id'=>Seller::pluck('seller_id')->random(),
            'ad_id'=>Admin::pluck('admin_id')->random(),
        ];
        
    }
}
