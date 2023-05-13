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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id('accessories_id');
            $table->timestamps();
            $table->string('acc_name')->require();
            $table->float('rate')->require();
            $table->float('price')->require();
            $table->string('photo')->require();
            $table->string('type')->require();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
};
