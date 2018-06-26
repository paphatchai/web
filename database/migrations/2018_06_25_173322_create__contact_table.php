<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AddressTH');
            $table->string('AddressEN');
            $table->string('Email');
            $table->string('Tel1');
            $table->text('Tel2');
            $table->string('logo');
            $table->string('Facebook');
            $table->text('Line');
            $table->string('IG');
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
        Schema::dropIfExists('Contact');
    }
}
