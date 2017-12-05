<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_lastname');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('state_birth');
            $table->string('town_birth');
            $table->string('phone');
            $table->string('cell_phone');
            $table->string('state');
            $table->string('town');
            $table->string('country');
            $table->string('street');
            $table->string('house_number');
            $table->string('colony');
            $table->string('post_code');
            $table->string('email');
            $table->string('tutor_name');
            $table->string('tutor_phone');
            $table->integer('status');
            $table->string('curp');
            $table->string('sep');
            $table->string('languages');
            $table->integer('campus_id')->unsigned();
			      $table->foreign('campus_id')->references('id')->on('campuses')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
