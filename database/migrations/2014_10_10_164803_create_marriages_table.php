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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id('marriage_id');
            $table->timestamps();
            $table->string('marr_name')->require();
            $table->string('photo')->require();
            $table->string('type')->require();
            $table->text('description')->require();
            $table->text('health_status')->require();
            $table->string('age')->require();
            $table->string('gender')->require();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marriages');
    }
};
