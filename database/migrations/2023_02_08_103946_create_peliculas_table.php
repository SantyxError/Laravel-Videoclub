<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year');
            $table->integer('duration');
            $table->unsignedBigInteger('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('directors');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
};
