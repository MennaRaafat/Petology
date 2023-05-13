<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('seller_id');
            $table->string('seller_name')->require();
           
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
            $table->string('gender')->require();
            $table->string('role');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
