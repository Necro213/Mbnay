<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrincipalPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal_page', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario');
            $table->string('telefono');
            $table->string('horario');
            $table->string('FSC1title');
            $table->string('FSC1content');
            $table->string('FSC1image');
            $table->string('FSC2title');
            $table->string('FSC2content');
            $table->string('FSC2image');
            $table->string('FSC3title');
            $table->string('FSC3content');
            $table->string('FSC3image');
            $table->string('FSC4title');
            $table->string('FSC4content');
            $table->string('FSC4image');
            $table->string('FSC5title');
            $table->string('FSC5content');
            $table->string('FSC5image');
            $table->string('SSempresa');
            $table->longText('SSmensaje');
            $table->string('TSservice1');
            $table->string('TSservice2');
            $table->string('TSservice3');
            $table->string('TSservice4');
            $table->string('TSimage');

            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principal_page');
    }
}
