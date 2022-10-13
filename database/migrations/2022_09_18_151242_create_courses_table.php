<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('course_name');
            $table->text('course_school_category');
            $table->text('course_photo');
            $table->string('course_level');
            $table->string('course_years');
            $table->text('course_price_range');
            $table->text('requirements_document_one')->nullable();
            $table->text('requirements_document_two')->nullable();
            $table->text('requirements_document_three')->nullable();
            $table->text('description');

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
        Schema::dropIfExists('courses');
    }
}
