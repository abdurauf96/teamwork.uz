<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->text('body_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->text('body_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('body_en')->nullable();
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->string('slug')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('features');
    }
}
