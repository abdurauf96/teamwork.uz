<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlokAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok_abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('result1_uz')->nullable();
            $table->string('result1_ru')->nullable();
            $table->string('result1_en')->nullable();
            $table->string('result2_uz')->nullable();
            $table->string('result2_ru')->nullable();
            $table->string('result2_en')->nullable();
            $table->string('value1')->nullable();
            $table->string('value2')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blok_abouts');
    }
}
