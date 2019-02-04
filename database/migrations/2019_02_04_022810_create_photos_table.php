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
            $table->smallInteger('type_id');
            $table->integer('tour_id');
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('image', 255);
            $table->string('image_thumb', 255);
            $table->float('size');
            $table->string('description', 255);
            $table->string('tags', 255);
            $table->integer('order');
            $table->tinyInteger('status');
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
