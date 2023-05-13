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
        Schema::create('food__addeds', function (Blueprint $table) {
            $table->id('foodadd_id');
            $table->timestamps();

            $table ->unsignedBigInteger('fid');
            $table->foreign('fid')->references('food_id')->on('food')->onDelete('cascade');

            
            $table ->unsignedBigInteger('sid');
            $table->foreign('sid')->references('seller_id')->on('sellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food__addeds');
    }
};
