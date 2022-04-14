<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('unit_id')->on('unites')->onDelete('set null');
            $table->date('visit_issue_date');
            $table->string('visit_name',200)->nullable(0);
            $table->string('visit_mobile',100)->nullable(0);
            $table->string('visit_inttime',250)->nullable(0);
            $table->string('visit_outtime',250)->nullable(0);
            $table->char('sexe');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
