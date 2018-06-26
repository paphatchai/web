<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductNameTH');
            $table->string('ProductNameEN');
            $table->string('ProductDetailTH');
            $table->string('ProductDetailEN');
            $table->string('LocationTH');
            $table->string('LocationEN');
            $table->date('CompletedTH');
            $table->date('CompletedEN');
            $table->string('AreaTH');
            $table->string('AreaEN');
            $table->integer('Bathroom');
            $table->integer('Bedroom');
            $table->text('HTML');
            $table->integer('ProductGroupID');
            $table->boolean('Active');
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
        Schema::dropIfExists('Products');
    }
}
