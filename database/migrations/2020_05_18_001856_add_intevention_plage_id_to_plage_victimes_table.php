<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInteventionPlageIdToPlageVictimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plage_victimes', function (Blueprint $table) {
          $table->unsignedBigInteger('intervention_plage_id');

          $table->foreign('intervention_plage_id')->references('id')->on('intervention_plages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plage_victimes', function (Blueprint $table) {
          $table->dropColumn('intervention_plage_id');
          $table->dropForeign(['intervention_plage_id']); 
        });
    }
}
