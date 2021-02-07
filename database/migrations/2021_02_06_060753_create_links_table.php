<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('about_title_uz')->nullable();
            $table->text('about_desc_uz')->nullable();
            $table->string('contact_title_uz')->nullable();
            $table->text('contact_desc_uz')->nullable();
            $table->string('addres_uz')->nullable();
            $table->string('footer_uz')->nullable();
            $table->string('about_title_ru')->nullable();
            $table->text('about_desc_ru')->nullable();
            $table->string('contact_title_ru')->nullable();
            $table->text('contact_desc_ru')->nullable();
            $table->string('addres_ru')->nullable();
            $table->string('footer_ru')->nullable();
            $table->string('about_title_en')->nullable();
            $table->text('about_desc_en')->nullable();
            $table->string('contact_title_en')->nullable();
            $table->text('contact_desc_en')->nullable();
            $table->string('addres_en')->nullable();
            $table->string('footer_en')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_logo')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->string('tg')->nullable();
            $table->string('insta')->nullable();
            $table->string('fb')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('wk')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }
}
