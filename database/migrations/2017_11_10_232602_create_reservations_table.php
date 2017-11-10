<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('admin');
            $table->string('address');
            $table->string('phone');
            $table->string('logo_img');
            $table->string('marketing_docs');
            $table->integer('stand_id')->unsigned();
            $table->timestamps();

            $table->foreign('stand_id')->references('id')->on('stands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
