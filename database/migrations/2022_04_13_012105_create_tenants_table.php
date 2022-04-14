<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenat_name');
            $table->string('email');
            $table->string('password');
            $table->string('contact');
            $table->string('address');
            $table->string('cin');
            $table->string('floor_no');
            $table->string('unit_no');
            $table->string('adv_rent');
            $table->string('rent_per_month');
            $table->string('rent_month');
            $table->string('rent_year');
            $table->string('status');
            $table->string('file_path');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
