<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('admin_users', function (Blueprint $table) {
      //$table->bigIncrements('id');
      //$table->timestamps();
      $table->increments('id');
      $table->string('title');
      $table->string('content');
      //$table->string('person_in_charge',100)->nullable();
      //$table->timestamps();
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
