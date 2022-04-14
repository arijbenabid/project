<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('building_id');
            $table->string('building_name',100)->nullable(0);
            $table->string('building_email',50)->nullable(0);
            $table->string('building_contact_number',100)->nullable(0);
            $table->string('building_address',100);
            $table->string('building_security_guard_mobile',25);
            $table->string('building_secrataty_mobile',25);
            $table->string('building_moderator_mobile',25);
            $table->string('building_make_year',25);
            $table->string('building_image',250);
            $table->tinyinteger('building_status');
            $table->string('building_company_name',250);
            $table->string('building_company_phone',250);
            $table->string('building_company_address',1000);
            $table->text('building_rule');
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
        Schema::dropIfExists('buildings');
    }
}
