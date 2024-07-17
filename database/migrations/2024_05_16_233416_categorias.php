<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\CategoriasSeeder;

use App\Models\categorias;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('img');
            $table->timestamps();
        });

        $categorias = [
            ['nombre' =>'ACUÁTICAS','img'=>'Acuaticas.jpg'],
            ['nombre' =>'AROMÁTICAS','img'=>'Aromáticas.jpg'],
            ['nombre' =>'CÁCTUS / SUCULENTAS','img'=>'Cactus_y_Suculentas.jpg'],
            ['nombre' =>'CARNÍVORAS','img'=>'Carnivoras.jpg'],
            ['nombre' =>'COLOMBIANAS','img'=>'Colombianas.jpg'],
            ['nombre' =>'INTERIORES','img'=>'Interiores.jpg'],
            ['nombre' =>'MEDICINALES','img'=>'Medicinales.jpg'],
            ['nombre' =>'TÓXICAS','img'=>'Toxicas.jpg']
        ];

        foreach ($categorias as $categoriasF) {
            categorias::insert($categoriasF);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};

