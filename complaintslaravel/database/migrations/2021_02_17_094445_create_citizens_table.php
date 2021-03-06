<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('n_id');
            $table->string('nationality');
            $table->string('first_name');
            $table->string('sec_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('address');
            $table->string('mobile_number');
            $table->string('gender');
            $table->string('password');

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
        Schema::dropIfExists('citizens');
    }
}
