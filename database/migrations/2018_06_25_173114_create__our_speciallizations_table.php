<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurSpeciallizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OurSpeciallizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TopicTH');
            $table->string('TopicEN');
            $table->string('DetailTH');
            $table->string('DetailEN');
            $table->string('FileName');
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
        Schema::dropIfExists('OurSpeciallizations');
    }
}
