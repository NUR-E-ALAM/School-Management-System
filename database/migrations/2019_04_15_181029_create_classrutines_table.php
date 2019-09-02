<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassrutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrutines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('session_id')->unsigned()->nullable();
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->unsignedBigInteger('class_id')->unsigned()->nullable();
            $table->foreign('class_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->unsignedBigInteger('shift_id')->unsigned()->nullable();
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id')->unsigned()->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('professor_id')->unsigned()->nullable();
            $table->foreign('professor_id')->references('id')->on('teacherinfos')->onDelete('cascade');
            $table->unsignedBigInteger('day_id')->unsigned()->nullable();
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
            $table->unsignedBigInteger('s_hour_id')->unsigned()->nullable();
            $table->foreign('s_hour_id')->references('id')->on('hours')->onDelete('cascade');
            $table->unsignedBigInteger('s_minute_id')->unsigned()->nullable();
            $table->foreign('s_minute_id')->references('id')->on('minutes')->onDelete('cascade');
            $table->unsignedBigInteger('e_hour_id')->unsigned()->nullable();
            $table->foreign('e_hour_id')->references('id')->on('hours')->onDelete('cascade');
            $table->unsignedBigInteger('e_minute_id')->unsigned()->nullable();
            $table->foreign('e_minute_id')->references('id')->on('minutes')->onDelete('cascade');

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
        Schema::dropIfExists('classrutines');
    }
}
