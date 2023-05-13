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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cart_id');
            $table->timestamps();
            $table->integer('ordered_qty');

            $table ->unsignedBigInteger('f_id');
            $table->foreign('f_id')->references('food_id')->on('food')->onDelete('cascade');

            $table ->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('user_id')->on('users')->onDelete('cascade');

            $table ->unsignedBigInteger('accs_id');
            $table->foreign('accs_id')->references('accessories_id')->on('accessories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
