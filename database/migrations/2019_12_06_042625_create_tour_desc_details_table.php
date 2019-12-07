<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourDescDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_desc_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //cat-tour
            $table->unsignedBigInteger ('cat_tours_id');
            $table->unsignedBigInteger ('tour_desc_id');
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
        Schema::dropIfExists('tour_desc_details');
    }
}
