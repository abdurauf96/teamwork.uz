<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id')->nullable();
            $table->string('name_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('image')->nullable();
            $table->text('link')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_projects');
    }
}
