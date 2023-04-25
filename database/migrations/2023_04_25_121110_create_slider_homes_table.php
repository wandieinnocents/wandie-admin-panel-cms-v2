<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_homes', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->text('photo')->nullable();
            $table->string('link_one')->nullable();
            $table->string('link_two')->nullable();
            $table->string('link_three')->nullable();
            $table->string('link_four')->nullable();


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
        Schema::dropIfExists('slider_homes');
    }
}
