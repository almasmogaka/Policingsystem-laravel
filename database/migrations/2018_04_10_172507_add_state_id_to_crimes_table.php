<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStateIdToCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crimes', function (Blueprint $table) {
            $table->integer('state_id')->nullable()->unsigned()->after('crimetype_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crimes', function (Blueprint $table) {
            $table->dropColumn('state_id');
        });
    }
}
