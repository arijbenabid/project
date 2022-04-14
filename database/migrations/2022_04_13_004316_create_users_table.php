<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->unsignedInteger('building_id')->nullable();
            $table->foreign('building_id')->references('building_id')->on('buildings')->onDelete('set null');
            $table->char('user_type',1)->nullable(0);
            $table->string('user_name',200);
            $table->string('email',200);
            $table->string('user_tel',100);
            $table->string('password',100);
            $table->string('user_image',250);
            $table->string('user_pre_address',200);
            $table->string('user_per_address',200);
            $table->string('user_nid',200);
            $table->string('user_designation', 1000);
            $table->date('user_date_creation')->format("yyyy-MM-dd");
            $table->date('user_ending_date')->format("yyyy-MM-dd");
            $table->tinyinteger('user_status');
            $table->string('user_currlang',10);
            $table->decimal('user_salary', 8,3)->nullable();
            $table->string('user_member_type',200);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
