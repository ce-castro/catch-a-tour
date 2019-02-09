<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('desc_top');
            $table->text('desc_bottom');
            $table->float('adults');
            $table->float('child');
            $table->text('available', 255);
            $table->text('duration', 20);
            $table->text('includes')->nullable();
            $table->text('does_not_include')->nullable();
            $table->text('additional_info', 255)->nullable();
            $table->text('how_to_get', 255);
            $table->text('keywords', 255)->nullable();
            $table->text('description_html', 255)->nullable();
            $table->text('image_og', 255);
            $table->integer('order');
            $table->tinyInteger('recommended');
            $table->string('url', 255);
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
        Schema::dropIfExists('tours');
    }
}
