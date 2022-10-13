<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('volunteer_name');
            $table->string('volunteer_dob');
            $table->text('volunteer_address');
            $table->string('volunteer_phone');
            $table->string('volunteer_email');
            $table->string('volunteer_level_of_education');
            $table->text('volunteer_reason_to_join');
            $table->text('volunteer_photo');
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
        Schema::dropIfExists('volunteers');
    }
}
