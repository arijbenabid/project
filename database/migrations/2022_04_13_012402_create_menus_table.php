<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->integer('menu_parentid');
            $table->tinyinteger('menu_level');
            $table->integer('menu_order');
            $table->string('menu_name',100)->nullable(0);
            $table->string('menu_description',250)->nullable();
            $table->tinyinteger('menu_superuser')->nullable(0)->default(1);
            $table->tinyinteger('menu_admin')->nullable(0)->default(1);
            $table->tinyinteger('menu_owner')->nullable(0)->default(0);
            $table->tinyinteger('menu_tenant')->nullable(0)->default(0);
            $table->tinyinteger('menu_employee')->nullable(0)->default(0);
            $table->tinyinteger('menu_committee')->nullable(0)->default(0);
            $table->string('menu_icon',100)->nullable();
            $table->string('menu_icon_type',100)->nullable();
            $table->string('navLink',100)->nullable();
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
        Schema::dropIfExists('menus');
    }
}
