<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id')->index();
            $table->unsignedBigInteger('player_id')->index();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('against_id')->index();
            $table->unsignedInteger('scored_at');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('against_id')->references('id')->on('teams');
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
        Schema::dropIfExists('goals');
    }
}
