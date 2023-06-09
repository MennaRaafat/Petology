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
        Schema::create('shelters', function (Blueprint $table) {
            $table->id('shelter_id');
            $table->timestamps();
            $table->string('sh_name');
            $table->string('phone');
            $table->string('address');

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
        Schema::dropIfExists('shelters');
    }
};
