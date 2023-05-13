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
        Schema::create('users', function (Blueprint $table) {

            $table->id('user_id');
            $table->string('us_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('gender')->require();


            $table ->unsignedBigInteger('m_id');
            $table->foreign('m_id')->references('marriage_id')->on('marriages')->onDelete('cascade');

            $table ->unsignedBigInteger('dr_id');
            $table->foreign('dr_id')->references('doctor_id')->on('doctors')->onDelete('cascade');

            $table ->unsignedBigInteger('tr_id');
            $table->foreign('tr_id')->references('trainer_id')->on('trainers')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
