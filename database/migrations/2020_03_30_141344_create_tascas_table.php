<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTascasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default(''); 
            $table->string('slug')->default('');
            $table->boolean('completada')->default(false);
            $table->longtext('descripcio');
            $table->integer('projecte_id')->unsigned()->default(0); 
            // Estableix una clau forana per la relación entre Tasques i Projectes
            $table->foreign('projecte_id')->references('id')->on('projectes')->onDelete('cascade');
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
        Schema::dropIfExists('tasques');
    }
}
