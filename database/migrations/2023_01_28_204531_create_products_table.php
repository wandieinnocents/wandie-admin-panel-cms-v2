<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('product_category_id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->longText('description')->nullable();
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->tinyInteger('trending')->default('0')->comment('0=not-trending,1=trending');
            $table->tinyInteger('status')->default('0')->comment('0=visible,1=hidden');
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();
            // $table->text('image')->nullable();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('product_brands')->onDelete('cascade');

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
