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
        Schema::create('fooddetails', function (Blueprint $table) {
            $table->id('fdetail_id');
            $table->timestamps();
            $table->integer('ordered_qty');

            $table ->unsignedBigInteger('fid');
            $table->foreign('fid')->references('food_id')->on('food')->onDelete('cascade');

            
            $table ->unsignedBigInteger('oid');
            $table->foreign('oid')->references('order_id')->on('orders')->onDelete('cascade');

            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fooddetails');
    }
};
