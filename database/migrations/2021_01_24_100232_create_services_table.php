<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('body_uz')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_en')->nullable();
            $table->string('icon')->nullable();
            $table->string('slug')->unique();
            $table->text('seo_desc')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->integer('footer')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
