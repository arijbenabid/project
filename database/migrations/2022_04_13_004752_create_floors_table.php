<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('floor_id');
            $table->unsignedInteger('building_id');
            $table->foreign('building_id')->references('building_id')->on('buildings');
            $table->string('floor_name',200);
            $table->integer('floor_num');
            $table->tinyInteger('floor_elevator');
            $table->integer('floor_area');
            $table->date('floor_added_date');
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
        Schema::dropIfExists('floors');
    }
}
