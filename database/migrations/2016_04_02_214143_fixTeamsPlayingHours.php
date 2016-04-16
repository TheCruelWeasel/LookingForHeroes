<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixTeamsPlayingHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('teamsplayinghours', function(Blueprint $table) {
          $table->string('monday');
          $table->string('thuesday');
          $table->string('wednesday');
          $table->string('thursday');
          $table->string('friday');
          $table->string('saturday');
          $table->string('sunday');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('teamsplayinghours', function(Blueprint $table) {
          $table->dropColumn('monday');
          $table->dropColumn('thuesday');
          $table->dropColumn('wednesday');
          $table->dropColumn('thursday');
          $table->dropColumn('friday');
          $table->dropColumn('saturday');
          $table->dropColumn('sunday');
      });
    }
}
