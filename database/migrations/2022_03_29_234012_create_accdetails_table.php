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
        Schema::create('accdetails', function (Blueprint $table) {
            $table->id('adetail_id');
            $table->timestamps();
            $table->integer('order_qty');

            $table ->unsignedBigInteger('aid');
            $table->foreign('aid')->references('accessories_id')->on('accessories')->onDelete('cascade');

            
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
        Schema::dropIfExists('accdetails');
    }
};
