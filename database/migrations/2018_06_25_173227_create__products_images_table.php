<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductsImages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ImageNameTH');
            $table->string('ImageNameEN');
            $table->string('ImageTitleTH');
            $table->string('ImageTitleEN');
            $table->string('FileImageName');
            $table->string('Reference');
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
        Schema::dropIfExists('ProductsImages');
    }
}
