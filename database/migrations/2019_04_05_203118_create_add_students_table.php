<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('gurdian_id')->unsigned()->nullable();
            $table->foreign('gurdian_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
             $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->string('picture');
            $table->string('facontact');
            $table->string('contact_no');
            $table->unsignedBigInteger('language_id')->unsigned()->nullable();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->unsignedBigInteger('religion_id')->unsigned()->nullable();
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->unsignedBigInteger('blood_id')->unsigned()->nullable();
            $table->foreign('blood_id')->references('id')->on('blood_groups')->onDelete('cascade');
            $table->unsignedBigInteger('gender_id')->unsigned()->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->unsignedBigInteger('nationality_id')->unsigned()->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
                  
            $table->string('present_address');
            $table->string('permanent_address');
            $table->unsignedBigInteger('active_id')->unsigned()->nullable();
            $table->foreign('active_id')->references('id')->on('actives')->onDelete('cascade');
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
        Schema::dropIfExists('add_students');
    }
}
