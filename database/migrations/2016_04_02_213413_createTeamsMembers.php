<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamsmembers', function (Blueprint $table) {
          $table->integer('id_team')->unsigned();
          $table->integer('id_player')->unsigned();
            $table->timestamps();
        });

        Schema::table('teamsmembers', function(Blueprint $table) {
            $table->foreign('id_team')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('id_player')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teamsmembers', function(Blueprint $table) {
          $table->dropForeign('teamsmembers_id_player_foreign');
          $table->dropForeign('teamsmembers_id_team_foreign');
        });
    }
}
