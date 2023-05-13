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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('profile_id');
            $table->string('profile_name')->require();
            $table->timestamps();
            
            $table ->unsignedBigInteger('dr_id');
            $table->foreign('dr_id')->references('doctor_id')->on('doctors')->onDelete('cascade');
            $table ->unsignedBigInteger('tr_id');
            $table->foreign('tr_id')->references('trainer_id')->on('trainers')->onDelete('cascade');
            $table ->unsignedBigInteger('s_id');
            $table->foreign('s_id')->references('seller_id')->on('sellers')->onDelete('cascade');

            $table ->unsignedBigInteger('ad_id');
            $table->foreign('ad_id')->references('admin_id')->on('admins')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
