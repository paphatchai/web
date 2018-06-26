<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('About', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TopicTH');
            $table->string('TopicEN');
            $table->string('TitleTH');
            $table->string('TitleEN');
            $table->text('DetailTH');
            $table->text('DetailEN');
            $table->string('FileImageName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('About');
    }
}
