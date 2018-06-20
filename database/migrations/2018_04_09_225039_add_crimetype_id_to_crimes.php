<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCrimetypeIdToCrimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crimes', function (Blueprint $table) {
            $table->integer('crimetype_id')->nullable()->unsigned()->after('m_taken');
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
            $table->dropColumn('crimetype_id');
        });
    }
}
