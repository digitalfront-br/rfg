<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaEntidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidade_tema', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tema_id');
            $table->unsignedBigInteger('entidade_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->foreign('entidade_id')->references('id')->on('entidades');
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
        Schema::dropIfExists('entidade_tema');
    }
}
