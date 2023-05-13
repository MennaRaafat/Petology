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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('trainer_id');
            $table->timestamps();
            $table->string('tr_name')->require();
            $table->integer('age')->require();
            $table->unsignedBigInteger('phone')->require();
            $table->float('rate')->require();
            $table->float('price')->require();
            $table->string('photo')->nullable();
            $table->text('description')->require();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->string('gender')->require();
            $table->string('role');


            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
};
