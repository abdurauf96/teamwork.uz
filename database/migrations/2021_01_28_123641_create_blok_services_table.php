<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlokServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok_services', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('image')->nullable();
            $table->text('seo_desc')->nullable();
            $table->text('seo_keyword')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blok_services');
    }
}
