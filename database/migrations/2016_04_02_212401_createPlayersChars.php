<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersChars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playerschars', function (Blueprint $table) {
            $table->integer('id_player')->unsigned();
            $table->integer('id_char')->unsigned();
            $table->timestamps();
        });

        Schema::table('playerschars', function(Blueprint $table) {
            $table->foreign('id_player')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_char')->references('id')->on('chars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('playerschars', function(Blueprint $table) {
          $table->dropForeign('playerschars_id_player_foreign');
          $table->dropForeign('playerschars_id_char_foreign');
        });
    }
}
