<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsPlayingHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamsplayinghours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_team')->unsigned();
            $table->timestamps();
        });

        Schema::table('teamsplayinghours', function(Blueprint $table) {
            $table->foreign('id_team')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teamsplayinghours', function(Blueprint $table) {
          $table->dropForeign('teamsplayinghours_id_team_foreign');
        });
    }
}
