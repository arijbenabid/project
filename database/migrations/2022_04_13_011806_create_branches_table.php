<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branch_name',100)->nullable(0);
            $table->string('branch_email',50)->nullable(0);
            $table->string('branch_contact_tel',100)->nullable(0);
            $table->string('branch_address',100);
            $table->string('branch_security_guard_mobile',25);
            $table->string('branch_secrataty_mobile',25);
            $table->string('branch_moderator_mobile',25);
            $table->string('branch_make_year',25);
            $table->string('branch_image',250);
            $table->tinyinteger('branch_status');
            $table->string('branch_company_name',250);
            $table->string('branch_company_phone',250);
            $table->string('branch_company_address',1000);
            $table->text('branch_rule');
            $table->timestamp('branch_created_date');
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
        Schema::dropIfExists('branches');
    }
}
