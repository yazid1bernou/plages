<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToInterventionPlagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('intervention_plages', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id');

          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intervention_plages', function (Blueprint $table) {
          $table->dropColumn('user_id');
          $table->dropForeign(['user_id']);
        });
    }
}
