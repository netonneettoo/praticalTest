<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_people', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('cnpj', 18)->unique();
            $table->string('social_reason');
            $table->string('fantasy_name');

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
        Schema::dropIfExists('legal_people');
    }
}
