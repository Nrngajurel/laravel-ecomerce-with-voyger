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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('image')->unique();
            $table->string('short_description')->nullable();
            $table->integer('price');
            $table->boolean('on_sale')->nullable();
            $table->string('on_stock');
            $table->text('description');
            $table->bigInteger('brand_id')->unsigned()->index()->nullable();
//            $table->foreign('brand_id')->references('id')->on('Brands')->onDelete('set null');
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
        Schema::dropIfExists('products');
    }
}
