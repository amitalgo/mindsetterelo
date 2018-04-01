<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_xes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('gender');
            $table->integer('age');
            $table->string('dob');
            $table->text('address');
            $table->string('location');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->text('qualification');
            $table->text('about');
            $table->text('skills')->nullable();
            $table->integer('exp');
            $table->text('honour')->nullable();
            $table->text('fees');
            $table->string('language');
            $table->string('time_slot');
            $table->integer('is_Active');
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
        Schema::dropIfExists('user_xes');
    }
}
