<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supes', function (Blueprint $table) {
            $table->bigIncrements('id_supe');
            $table->string('nickname',20);
            $table->string('description',200);
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->char('gender',1);
            $table->string('citizenship',20);
            $table->string('birthday',30);
            $table->boolean('status');
            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sups');
    }
}
