<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullSize')->nullable();
            $table->string('middleSize')->nullable();
            $table->string('smallSize')->nullable();
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('placeId')->unsigned();
            $table->foreign('placeId')->references('id')->on('places')->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
