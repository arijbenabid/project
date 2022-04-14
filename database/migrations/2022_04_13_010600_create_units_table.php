<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('unit_id');
            $table->unsignedInteger('building_id');
            $table->foreign('building_id')->references('building_id')->on('buildings');
            $table->unsignedInteger('floor_id');
            $table->foreign('floor_id')->references('floor_id')->on('floors');    
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('types');   
            $table->string('unit_name',200);
            $table->tinyinteger('unit_status');
            $table->integer('unit_roomnumber');
            $table->json('unit_pictures');
            $table->date('unit_added_date')->format("yyyy-MM-dd");
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
        Schema::dropIfExists('units');
    }
}
