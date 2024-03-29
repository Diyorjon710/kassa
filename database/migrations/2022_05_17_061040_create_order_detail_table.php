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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->unsignedBigInteger('mahsulot_id');
            $table->integer('mahsulot_narxi');
            $table->integer('mahsulot_soni');
            $table->unsignedBigInteger('buyurtmachi_id');
            $table->integer('jami');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('ordering')->onDelete('cascade');
            $table->foreign('mahsulot_id')->references('id')->on('mahsulot');
            $table->foreign('buyurtmachi_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
};
