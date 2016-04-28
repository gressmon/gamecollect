<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGamesAddConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('console_id')->references('id')->on('consoles');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('completion_id')->references('id')->on('completions');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['console_id']);
            $table->dropForeign(['region_id']);
            $table->dropForeign(['completion_id']);
            $table->dropForeign(['state_id']);
        });
    }
}
