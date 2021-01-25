<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_technologies');
    }
}
