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
        Schema::create('minumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('rasa');
            $table->integer('harga');
            $table->foreignId('penjual_id');
            $table->timestamps();
            $table->foreign('penjual_id')->references('id')->on('penjuals');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minumen');
    }
};
