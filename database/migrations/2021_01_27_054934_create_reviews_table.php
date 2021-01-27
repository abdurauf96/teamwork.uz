<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_uz')->nullable();
            $table->string('profession_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('profession_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('profession_en')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('star')->nullable();
            $table->string('main')->nullable();
            $table->text('link')->nullable();
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
        Schema::drop('reviews');
    }
}
