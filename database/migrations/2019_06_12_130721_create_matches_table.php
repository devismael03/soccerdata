<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('home_id')->index();
            $table->unsignedBigInteger('away_id')->index();
            $table->foreign('home_id')->references('id')->on('teams');
            $table->foreign('away_id')->references('id')->on('teams');
            $table->unsignedInteger('home_goals');
            $table->unsignedInteger('away_goals');
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
        Schema::dropIfExists('matches');
    }
}
