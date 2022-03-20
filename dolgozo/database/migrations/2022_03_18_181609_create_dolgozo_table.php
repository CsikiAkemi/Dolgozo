<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolgozoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolgozo', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
           
            $table->string( "nev", );
            $table->string( "varos", );
            $table->string( "szuletes", );
            $table->string( "fizetes", );
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dolgozo');
    }
}
