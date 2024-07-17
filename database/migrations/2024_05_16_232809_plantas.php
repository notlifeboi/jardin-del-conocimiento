<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\plantas;

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

        $columnas = ['nombre', 'nombre_cientifico', 'caracteristicas', 'descripcion', 'datos_claves', 'id_categoria', 'img'];

        $plantas = [
        [
            'Acoro', 
            'Acorus calamus', 
            'Altura: 60-120 cm. Hojas: Verdes, largas, aromáticas, con bordes finos. Flores: Pequeñas, de color amarillo verdoso, agrupadas en espádices cilíndricos.', 
            'El Acorus calamus, conocido comúnmente como acoro o cálamo aromático, es una planta perenne y herbácea con una altura que oscila entre 60 y 120 cm. Posee hojas largas y lineales en forma de espada, que desprenden un aroma distintivo cuando se aplastan. La planta produce pequeñas flores amarillas verdosas agrupadas en espádices cilíndricos que emergen de un tallo lateral.', 
            'Hábitat: Margen de ríos, lagos y pantanos. Origen: Regiones de Europa, Asia y América del Norte. Usos: Utilizado tradicionalmente en medicina como tónico digestivo y sedante. También se usa en perfumería y como planta ornamental en jardines acuáticos.', 
            1, 
            'Acoro.jpg'
        ],
        ];

        foreach ($plantas as $planta) {
            
            $datosPlanta = array_combine($columnas, $planta);
    
            plantas::insert($datosPlanta);
        }
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