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
        Schema::create('acc__addeds', function (Blueprint $table) {
            $table->id('acc_add_id');
            $table->timestamps();

            $table ->unsignedBigInteger('aid');
            $table->foreign('aid')->references('accessories_id')->on('accessories')->onDelete('cascade');

            
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
        Schema::dropIfExists('acc__addeds');
    }
};
