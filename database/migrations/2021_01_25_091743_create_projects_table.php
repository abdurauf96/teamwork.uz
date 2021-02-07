<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('portfolio_category_id')->nullable();
            
            $table->string('title_uz')->nullable();
            $table->text('desc_uz')->nullable();
            $table->text('body_uz')->nullable();

            $table->string('title_ru')->nullable();
            $table->text('desc_ru')->nullable();
            $table->text('body_ru')->nullable();
            
            $table->string('title_en')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('body_en')->nullable();
            $table->string('image')->nullable();
            $table->text('seo_desc')->nullable();
            $table->string('seo_keyword')->nullable();
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
        Schema::drop('projects');
    }
}
