<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoalscorers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goalscorers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->integer('minute')->nullable();
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('goalscorers', function (Blueprint $table) {
            $table->dropForeign('goalscorers_match_id_foreign');
            $table->dropForeign('goalscorers_player_id_foreign');
        });
        Schema::dropIfExists('goalscorers');
    }
}
