<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            $table-> id();
            $table->string('nombre');
            $table->string('nombre_cientifico');
            $table->text('caracteristicas1');
            $table->text('caracteristicas2')->nullable();
            $table->text('descripcion1');
            $table->text('descripcion2')->nullable();
            $table->text('datos_claves1');
            $table->text('datos_claves2')->nullable();
            $table->integer('id_categoria');
            $table->string('img');
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
        Schema::dropIfExists('plantas');
    }
};