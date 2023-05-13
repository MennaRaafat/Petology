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
        Schema::create('buy__animals', function (Blueprint $table) {
            $table->id('animal_id');
            $table->timestamps();
            $table->string('animal_name')->require();
            $table->float('price')->require();
            $table->string('photo')->require();
            $table->string('type')->require();
            $table->text('description')->require();
            $table->text('health_status')->require();
            $table->string('age')->require();
            $table->string('gender')->require();
            

            $table ->unsignedBigInteger('ad_id');
            $table->foreign('ad_id')->references('admin_id')->on('admins')->onDelete('cascade');

            $table ->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('user_id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy__animals');
    }
};
