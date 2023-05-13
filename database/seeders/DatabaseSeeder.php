<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
                \App\Models\User::factory(10)->create();

                 \App\Models\Doctor::factory(20)->create();

                 \App\Models\Trainer::factory(20)->create();
                 \App\Models\Marriage::factory(10)->create();

                 \App\Models\Profile::factory(20)->create();
                 \App\Models\Seller::factory(20)->create();

                 \App\Models\Admin::factory(10)->create();

                 \App\Models\Order::factory(10)->create();
                 \App\Models\Shipping::factory(10)->create();

                 \App\Models\Payment::factory(10)->create();
                 \App\Models\Food::factory(10)->create();
                 \App\Models\fooddetail::factory(10)->create();

                 \App\Models\Accessory::factory(10)->create();

                 \App\Models\accdetail::factory(10)->create();

                 \App\Models\Acc_Added::factory(10)->create();

                 \App\Models\Food_Added::factory(10)->create();



    }
}
