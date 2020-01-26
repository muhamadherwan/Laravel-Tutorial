<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRockstarfullstacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rockstarfullstacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->char('phone', 10)->unique();
            $table->string('email')->unique();
            $table->string('company');
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
        Schema::dropIfExists('rockstarfullstacks');
    }
}
