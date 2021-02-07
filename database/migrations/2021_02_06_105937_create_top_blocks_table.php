<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_uz')->nullable();
            $table->string('desc_uz')->nullable();
            $table->text('body_uz')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('desc_ru')->nullable();
            $table->text('body_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('desc_en')->nullable();
            $table->text('body_en')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('top_blocks');
    }
}
