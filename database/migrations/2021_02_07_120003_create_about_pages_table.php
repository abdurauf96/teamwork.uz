<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('main_title_uz')->nullable();
            $table->text('main_title_ru')->nullable();
            $table->text('main_title_en')->nullable();
            $table->text('main_desc_uz')->nullable();
            $table->text('main_desc_ru')->nullable();
            $table->text('main_desc_en')->nullable();
            $table->text('second_title_uz')->nullable();
            $table->text('second_title_ru')->nullable();
            $table->text('second_title_en')->nullable();
            $table->text('second_desc_uz')->nullable();
            $table->text('second_desc_ru')->nullable();
            $table->text('second_desc_en')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('about_pages');
    }
}
