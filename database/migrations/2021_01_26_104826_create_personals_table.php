<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_uz')->nullable();
            $table->string('profession_uz')->nullable();
            $table->text('about_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('profession_ru')->nullable();
            $table->text('about_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('profession_en')->nullable();
            $table->text('about_en')->nullable();
            $table->string('image')->nullable();
            $table->string('tg')->nullable();
            $table->string('insta')->nullable();
            $table->string('fb')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personals');
    }
}
