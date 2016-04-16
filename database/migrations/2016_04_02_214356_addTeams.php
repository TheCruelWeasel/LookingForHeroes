<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('teams', function(Blueprint $table) {
          $table->string('mainTimezone');
          $table->string('gameRegion');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('teams', function(Blueprint $table) {
          $table->dropColumn('mainTimezone');
          $table->dropColumn('gameRegion');
      });
    }
}
