<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('last_name');     
            $table->text('rank');
            $table->text('shell');     
            $table->text('email');
            $table->text('distrit');     
            $table->text('cod_sibyl');
            $table->text('description');                                         
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
        Schema::dropIfExists('agentes');
    }
}
