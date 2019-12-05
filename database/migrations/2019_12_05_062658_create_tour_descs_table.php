<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDescsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_descs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger ('cat_tours_id');

            $table->foreign('cat_tours_id')
                ->references('id')->on('cat_tours')
                ->onDelete('cascade');

            $table->string('title');
            $table->string('tour_category');
            $table->string('description');
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
        Schema::dropIfExists('tour_descs');
    }
}
