<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->increments('compl_id');
            $table->unsignedInteger('building_id')->nullable();
            $table->foreign('building_id')->references('building_id')->on('buildings')->onDelete('set null');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set null');
            $table->string('compl_title',200);
            $table->string('compl_description',1000);
            $table->date('compl_date');
            $table->tinyInteger('compl_job_status');
            $table->string('compl_assigned_to',100);
            $table->string('compl_solution',500);
            $table->string('compl_complainBy',100);
            $table->string('compl_name',250);
            $table->json('compl_pictures');
            $table->string('compl_email',100);
            $table->string('compl_phone',50);
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
        Schema::dropIfExists('complains');
    }
}
