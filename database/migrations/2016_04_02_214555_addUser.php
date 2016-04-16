<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function(Blueprint $table) {
          $table->string('description');
          $table->string('gameplayType');
          $table->string('mainLanguage');
          $table->string('mainTimezone');
          $table->string('gameRegion');
          $table->string('battleTag');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function(Blueprint $table) {
          $table->dropColumn('description');
          $table->dropColumn('gameplayType');
          $table->dropColumn('mainLanguage');
          $table->dropColumn('mainTimezone');
          $table->dropColumn('gameRegion');
          $table->dropColumn('battleTag');
      });
    }
}
