<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void  
     */
    public function up()
    {
        Schema::create('crimes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('recordedby');            
            $table->integer('phone_no');
            $table->text('description');            
            $table->string('l_occurred');
            $table->string('l_address');
            $table->Date('date');
            $table->Time('time');
            $table->string('m_taken');                                   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crimes');
    }
}
