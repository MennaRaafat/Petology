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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('ad_name');
            $table->string('password');
            $table->string('email');
            $table->string('role');
            $table->integer('age');
            $table->string('gender');
            $table->timestamps();
            $table->timestamp('email_verified_at');
            $table->rememberToken();

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
        Schema::dropIfExists('admins');
    }
};
