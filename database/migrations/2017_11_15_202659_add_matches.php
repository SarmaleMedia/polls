<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('first_team_id')->unsigned();
            $table->integer('second_team_id')->unsigned();
            $table->integer('first_team_goals')->nullable();
            $table->integer('second_team_goals')->nullable();
            $table->string('result', 10)->nullable();
            $table->timestamp('start_time');
            $table->timestamps();

            $table->foreign('first_team_id')->references('id')->on('teams');
            $table->foreign('second_team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign('matches_first_team_id_foreign');
            $table->dropForeign('matches_second_team_id_foreign');
        });
        Schema::dropIfExists('matches');
    }
}
