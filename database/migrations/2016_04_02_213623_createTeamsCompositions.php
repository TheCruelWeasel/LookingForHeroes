<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsCompositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamscompositions', function (Blueprint $table) {
          $table->integer('id_team')->unsigned();
          $table->integer('id_composition')->unsigned();
            $table->timestamps();
        });

        Schema::table('teamscompositions', function(Blueprint $table) {
            $table->foreign('id_team')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('id_composition')->references('id')->on('compositions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teamscompositions', function(Blueprint $table) {
          $table->dropForeign('teamscompositions_id_composition_foreign');
          $table->dropForeign('teamscompositions_id_team_foreign');
        });
    }
}
