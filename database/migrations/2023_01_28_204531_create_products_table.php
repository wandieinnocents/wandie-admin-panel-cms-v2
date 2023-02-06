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
            $table->string('brand');
            
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->mediumText('meta_description');
            $table->tinyInteger('status')->default('0')->comment('0=visible,1=hidden');


            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade')
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
