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
            $table->text('caracteristicas');
            $table->text('descripcion');
            $table->text('datos_claves');
            $table->integer('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
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