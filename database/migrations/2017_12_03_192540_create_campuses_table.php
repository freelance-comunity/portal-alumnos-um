<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campus_id');
            $table->string('name');
            $table->string('corporate_name');
            $table->string('rfc');
            $table->string('address');
            $table->string('number_outside');
            $table->string('number_inside');
            $table->string('reference');
            $table->string('postal_code');
            $table->string('colony');
            $table->string('federal_entity');
            $table->string('country');
            $table->string('campus_key');
            $table->integer('status');

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
        Schema::drop('campuses');
    }
}
