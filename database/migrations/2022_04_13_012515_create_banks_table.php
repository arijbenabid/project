<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('bank_id');
            $table->string('bank_name',100)->nullable(0);
            $table->tinyinteger('bank_type');
            $table->string('bank_branch',100);
            $table->string('bank_account',5);
            $table->string('bank_iban',100);
            $table->tinyInteger('bank_status');
            $table->tinyInteger('bank_accept_negative');
            $table->integer('bank_check_width');
            $table->integer('bank_check_height');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
