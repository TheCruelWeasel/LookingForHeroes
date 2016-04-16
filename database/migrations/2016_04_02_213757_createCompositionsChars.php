<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompositionsChars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compositionschars', function (Blueprint $table) {
          $table->integer('id_composition')->unsigned();
          $table->integer('id_char')->unsigned();
            $table->timestamps();
        });

        Schema::table('compositionschars', function(Blueprint $table) {
            $table->foreign('id_composition')->references('id')->on('compositions')->onDelete('cascade');
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

        Schema::drop('compositionschars', function(Blueprint $table) {
          $table->dropForeign('compositionschars_id_composition_foreign');
          $table->dropForeign('compositionschars_id_char_foreign');
        });
    }
}
