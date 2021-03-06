<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemaVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tema_video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tema_id');
            $table->unsignedBigInteger('video_id');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table->foreign('video_id')->references('id')->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tema_video');
    }
}
