<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsXSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details_xs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('gender');
            $table->integer('age');
            $table->text('address');
            $table->string('location');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->text('qualification');
            $table->text('subject');
            $table->text('about');
            $table->text('skills');
            $table->integer('exp');
            $table->text('honour');
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
        Schema::dropIfExists('user_details_xs');
    }
}
