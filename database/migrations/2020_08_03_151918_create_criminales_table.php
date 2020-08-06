<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriminalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminales', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('last_name');     
            $table->text('cri_latent');
            $table->text('leg_status');     
            $table->text('case_reg');
            $table->text('cell');     
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
        Schema::dropIfExists('criminales');
    }
}
