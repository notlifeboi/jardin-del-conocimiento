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

        $columnas = ['nombre', 'nombre_cientifico', 'caracteristicas1', 'descripcion1', 'datos_claves1', 'id_categoria', 'img'];

        $plantas = [
        [

        //ACUÁTICAS (1)

            'Acoro', 'Acorus calamus', 
            'Altura: 60-120 cm. Hojas: Verdes, largas, aromáticas, con bordes finos. Flores: Pequeñas, de color amarillo verdoso, agrupadas en espádices cilíndricos.', 
            'El Acorus calamus, conocido comúnmente como acoro o cálamo aromático, es una planta perenne y herbácea con una altura que oscila entre 60 y 120 cm. Posee hojas largas y lineales en forma de espada, que desprenden un aroma distintivo cuando se aplastan. La planta produce pequeñas flores amarillas verdosas agrupadas en espádices cilíndricos que emergen de un tallo lateral.', 
            'Hábitat: Margen de ríos, lagos y pantanos. Origen: Regiones de Europa, Asia y América del Norte. Usos: Utilizado tradicionalmente en medicina como tónico digestivo y sedante. También se usa en perfumería y como planta ornamental en jardines acuáticos.', 
            1, 'Acoro.jpg',

            'Alisma', 'Alisma plantago', 
            'Altura: 30-90 cm. Hojas: Ovadas a lanceoladas, emergen desde la base. Flores: Pequeñas, blancas o rosadas, en racimos abiertos.', 
            'Alisma plantago-aquática, conocida como llantén de agua, es una planta perenne acuática que se caracteriza por sus hojas basales y flores blancas o rosadas. Las hojas son ovadas a lanceoladas y emergen directamente desde la base. Las flores, pequeñas y delicadas, se agrupan en racimos abiertos y son generalmente de color blanco a rosado.', 
            'Hábitat: Margen de ríos, lagos y pantanos. Origen: Regiones de Europa, Asia y América del Norte. Usos: Utilizado tradicionalmente en medicina como tónico digestivo y sedante. También se usa en perfumería y como planta ornamental en jardines acuáticos.', 
            1, 'Alisma.jpg',

            'Cala', 'Zantedeschia aethiopica', 
            'Altura: 60-100 cm. Hojas: Grandes, sagitadas, de color verde oscuro. Flores: Espatas blancas con un espádice amarillo.', 
            'Zantedeschia aethiopica, comúnmente conocida como cala, es una planta perenne con hojas grandes, verdes y brillantes. La flor característica es una espata blanca envolviendo un espádice amarillo. Esta planta es apreciada tanto por su elegancia en jardines como por su uso en arreglos florales.', 
            'Hábitat: Suelos húmedos, zonas pantanosas. Origen: Región del sur de África. Usos: Ornamental en jardines acuáticos y flor cortada para arreglos florales.', 
            1, 'Cala.jpg',

            'Caléndula Acuática', 'Caltha palustris', 
            'Altura: 30-60 cm. Hojas: Redondas a reniformes, verdes y brillantes. Flores: Amarillas, con 5-9 pétalos.', 
            'Caltha palustris, conocida como caléndula acuática o botón de oro, es una planta perenne con flores amarillas brillantes y hojas redondeadas a reniformes. La planta es resistente y se adapta bien a las condiciones húmedas y pantanosas.', 
            'Hábitat: Zonas húmedas, orillas de ríos y estanques. Origen: Zonas templadas del hemisferio norte, incluyendo Europa, Asia y América del Norte. Usos: Ornamental, utilizada en medicina tradicional para tratar reumatismos y problemas cutáneos.', 
            1, 'Calendula_Acuatica.jpg',

            'Espigas de agua', 'Pontederia cordata', 
            'Altura: 60-120 cm. Hojas: Cordadas, largas y erectas. Flores: Espigas densas de color azul o violeta.', 
            'Pontederia cordata, conocida como espigas de agua, es una planta perenne con hojas en forma de corazón y espigas florales azules que emergen de largos tallos. Esta planta es valorada por su apariencia atractiva y su capacidad para mejorar los hábitats acuáticos.', 
            'Hábitat: Aguas poco profundas, bordes de estanques. Origen: América del Norte y del Sur. Usos: Ornamental en jardines acuáticos, mejora la calidad del agua al proporcionar refugio y alimento a la fauna acuática.', 
            1, 'Espigas_de_Agua.jpg',

            'Nenúfar perfumado', 'Nymphaea odorata', 
            'Hojas: Redondeadas, flotantes, de hasta 30 cm de diámetro. Flores: Grandes, blancas o rosadas, fragantes.', 
            'Nymphaea odorata, conocido como nenúfar perfumado, es una planta acuática con hojas flotantes y flores fragantes generalmente blancas o rosadas. Las hojas son redondeadas y flotan en la superficie del agua, mientras que las flores emergen sobre largos tallos.', 
            'Hábitat: Estanques, lagos tranquilos. Origen: América del Norte. Usos: Ornamental en estanques y jardines acuáticos, proporciona hábitat y refugio a diversas especies acuáticas.', 
            1, 'Nenúfar_perfumado.jpg',

            'Flor de nilo', 'Nelumbo nucifera', 
            'Hojas: Grandes, redondas, flotantes. Flores: Grandes, rosadas o blancas, fragantes.', 
            'Nelumbo nucifera, conocida como flor de nilo o loto sagrado, es una planta acuática con hojas grandes y flotantes, y flores impresionantes y fragantes, generalmente rosadas. Es conocida por su capacidad para crecer en aguas estancadas y por su simbolismo en varias culturas asiáticas.', 
            'Hábitat: Estanques, lagos. Origen: Asia (India, China). Usos: Ornamental, simbólico en el budismo y el hinduismo, usado en la cocina y medicina tradicional.', 
            1, 'Flor_de_nilo.jpg',

            'Helecho de Agua', 'Azolla caroliniana', 
            'Hojas: Pequeñas, superpuestas, verdes a rojizas. Flores: No presenta flores.', 
            'Azolla caroliniana, conocido como helecho de agua, es un pequeño helecho flotante con hojas diminutas que forman densas alfombras en la superficie del agua. Es conocido por su rápido crecimiento y su capacidad para fijar nitrógeno, mejorando la calidad del agua.', 
            'Hábitat: Aguas tranquilas, estanques. Origen: América del Norte. Usos: Biofertilizante, mejora de calidad del agua, utilizado en cultivos de arroz para fijar nitrógeno.', 
            1, 'Helecho_de_agua.jpg',

            'Iris Amarillo', 'Iris pseudacorus', 
            'Altura: 50-150 cm. Hojas: Largas, en forma de espada. Flores: Amarillas, grandes, con tres pétalos caídos.', 
            'Iris pseudacorus, conocido como iris amarillo, es una planta perenne con flores amarillas brillantes y hojas en forma de espada. Es resistente y se adapta bien a las condiciones húmedas y pantanosas, y es útil para el control de la erosión.', 
            'Hábitat: Bordes de ríos, lagos y zonas pantanosas. Origen: Europa, Asia y África del Norte. Usos: Ornamental, control de erosión, a veces utilizado en sistemas de tratamiento de aguas residuales.', 
            1, 'Iris_Amarillo.jpg',

            'Mordisco de Rana', 'Hydrocharis morsus-ranae', 
            'Altura: 30-100 cm. Hojas: Redondeadas, flotantes. Flores: Pequeñas, blancas.', 
            'Hydrocharis morsus-ranae, conocido como mordisco de rana, es una planta acuática flotante con hojas redondeadas y pequeñas flores blancas. Las hojas flotan en la superficie del agua y las flores son pequeñas y delicadas.', 
            'Hábitat: Aguas tranquilas, lagos y estanques. Origen: Europa y Asia. Usos: Ornamental en estanques y acuarios, proporciona hábitat a diversas especies acuáticas, mejora la calidad del agua al reducir la luz y limitar el crecimiento de algas.', 
            1, 'Mordisco_de_Rana.jpg',

        // AROMÁTICAS (2)

            'Albahaca', 'Ocimum basilicum', 
            'La albahaca es una planta herbácea anual, conocida por sus hojas fragantes y sabor distintivo. Es una hierba culinaria esencial en muchas cocinas alrededor del mundo.', 
            'Altura: 30-60 cm. Hojas: Verdes, ovaladas, lisas o ligeramente arrugadas. Flores: Pequeñas, blancas o rosadas, en espigas terminales.', 
            'Hábitat: Climas cálidos y soleados. Origen: India y otras regiones tropicales de Asia. Usos: Culinario (pesto, ensaladas, salsas), medicinal (antibacteriano, antiinflamatorio).', 
            2, 'Albahaca.jpg',

            'Romero', 'Salvia rosmarinus', 
            'El romero es un arbusto perenne con hojas estrechas y aromáticas. Es ampliamente utilizado tanto en la cocina como en la medicina tradicional.', 
            'Altura: 1-2 metros. Hojas: Pequeñas, lineales, verdes en el anverso y blancas en el reverso. Flores: Pequeñas, azules o púrpuras.', 
            'Hábitat: Regiones mediterráneas y climas templados. Origen: Región del Mediterráneo. Usos: Culinario (carnes, panes), medicinal (mejora la memoria, antiinflamatorio), ornamental.', 
            2, 'Romero.jpg',

            'Menta', 'Mentha spicata', 
            'La menta es una planta perenne conocida por sus hojas verdes y aroma fresco. Se utiliza en alimentos, bebidas y productos medicinales.', 
            'Altura: 30-100 cm. Hojas: Lanceoladas, verdes, dentadas. Flores: Pequeñas, lilas o rosas, en espigas terminales.', 
            'Hábitat: Zonas húmedas y soleadas. Origen: Europa y Asia. Usos: Culinario (tés, postres, ensaladas), medicinal (digestivo, refrescante).', 
            2, 'Menta.jpg',

            'Tomillo', 'Thymus vulgaris', 
            'El tomillo es una planta perenne y aromática con pequeñas hojas y flores. Es una hierba versátil en la cocina y tiene usos medicinales.', 
            'Altura: 15-30 cm. Hojas: Pequeñas, ovaladas, verdes. Flores: Pequeñas, lilas o blancas.', 
            'Hábitat: Regiones mediterráneas y climas templados. Origen: Región del Mediterráneo. Usos: Culinario (sopas, guisos, salsas), medicinal (antiséptico, expectorante).', 
            2, 'Tomillo.jpg',

            'Orégano', 'Origanum vulgare', 
            'El orégano es una planta perenne con hojas pequeñas y aromáticas. Es ampliamente utilizado en la cocina y en la medicina tradicional.', 
            'Altura: 20-80 cm. Hojas: Pequeñas, ovaladas, verdes. Flores: Pequeñas, púrpuras o blancas.', 
            'Hábitat: Regiones mediterráneas y climas templados. Origen: Región del Mediterráneo. Usos: Culinario (pizzas, pastas, salsas), medicinal (antioxidante, antimicrobiano).', 
            2, 'Orégano.jpg',

            'Salvia', 'Salvia officinalis', 
            'La salvia es una planta perenne con hojas grises y vellosas. Tiene un aroma fuerte y es utilizada tanto en la cocina como en la medicina.', 
            'Altura: 30-60 cm. Hojas: Ovaladas, grises, vellosas. Flores: Pequeñas, lilas o púrpuras.', 
            'Hábitat: Regiones mediterráneas y climas templados. Origen: Región del Mediterráneo. Usos: Culinario (carnes, salsas), medicinal (antiinflamatorio, antioxidante).', 
            2, 'Salvia.jpg',

            'Cilantro', 'Coriandrum sativum', 
            'El cilantro es una planta anual con hojas aromáticas y semillas que se utilizan como especia. Es una hierba esencial en muchas cocinas del mundo.', 
            'Altura: 30-50 cm. Hojas: Finamente divididas, verdes. Flores: Pequeñas, blancas o rosadas, en umbelas.', 
            'Hábitat: Climas cálidos y soleados. Origen: Región del Mediterráneo. Usos: Culinario (guacamole, currys, ensaladas), medicinal (digestivo, antiinflamatorio).', 
            2, 'Cilantro.jpg',

            'Lavanda', 'Lavandula angustifolia', 
            'La lavanda es un arbusto perenne conocido por sus flores moradas y su aroma relajante. Se utiliza en la aromaterapia y en productos de cuidado personal.', 
            'Altura: 30-90 cm. Hojas: Lineales, grises, aromáticas. Flores: Pequeñas, moradas, en espigas.', 
            'Hábitat: Regiones mediterráneas y climas templados. Origen: Región del Mediterráneo. Usos: Aromaterapia (relajante), cuidado personal (jabones, lociones), ornamental.', 
            2, 'Lavanda.jpg',

            'Perejil', 'Petroselinum crispum', 
            'El perejil es una planta bienal con hojas verdes y rizadas. Es una hierba versátil en la cocina y también tiene propiedades medicinales.', 
            'Altura: 30-60 cm. Hojas: Rizadas o planas, verdes. Flores: Pequeñas, verdes o amarillas, en umbelas.', 
            'Hábitat: Climas templados y soleados. Origen: Región del Mediterráneo. Usos: Culinario (guarniciones, ensaladas, salsas), medicinal (digestivo, diurético).', 
            2, 'Perejil.jpg',

            'Hierbabuena', 'Mentha spicata var. crispa', 
            'La hierbabuena es una variedad de menta con hojas rizadas y un aroma fresco. Se utiliza en alimentos, bebidas y productos medicinales.', 
            'Altura: 30-100 cm. Hojas: Rizadas, verdes, dentadas. Flores: Pequeñas, lilas o rosas, en espigas terminales.', 
            'Hábitat: Zonas húmedas y soleadas. Origen: Europa y Asia. Usos: Culinario (tés, postres, ensaladas), medicinal (digestivo, refrescante).', 
            2, 'Hierbabuena.jpg',

        // CÁCTUS (3)

            'Aloe', 'Aloe ferox', 
            'El Aloe ferox es una planta suculenta perenne conocida por sus grandes hojas carnosas llenas de gel. Es una de las especies de aloe más grandes y es apreciada por sus propiedades medicinales.', 
            'Altura: Hasta 3 metros. Hojas: Grandes, carnosas, con espinas en los bordes, verde grisáceo. Flores: Tubulares, anaranjadas o rojas, en racimos altos.', 
            'Hábitat: Zonas áridas y semiáridas. Origen: Sudáfrica. Usos: Medicinal (gel para quemaduras, heridas, productos cosméticos).', 
            3, 'Aloe.jpg',

            'Jade Plant', 'Crassula ovata', 
            'La Crassula ovata, comúnmente conocida como planta de jade, es una suculenta perenne con hojas gruesas y carnosas. Es popular como planta de interior por su facilidad de cuidado.', 
            'Altura: Hasta 1,5 metros. Hojas: Ovaladas, carnosas, de color verde brillante. Flores: Pequeñas, blancas o rosadas, en racimos.', 
            'Hábitat: Zonas áridas y semiáridas. Origen: Sudáfrica y Mozambique. Usos: Ornamental (planta de interior, bonsái).', 
            3, 'Jade_Plant.jpg',

            'Zebra Haworthia', 'Haworthiopsis fasciata', 
            'La Haworthiopsis fasciata, conocida como Haworthia cebra, es una pequeña suculenta con hojas puntiagudas y rayas blancas distintivas.', 
            'Altura: Hasta 15 cm. Hojas: Puntiagudas, verdes con rayas blancas transversales. Flores: Pequeñas, blancas, en espigas.', 
            'Hábitat: Zonas áridas. Origen: Sudáfrica. Usos: Ornamental (planta de interior).', 
            3, 'Zebra_Haworthia.jpg',

            'Burro’s Tail', 'Sedum morganianum', 
            'El Sedum morganianum, conocido como cola de burro, es una suculenta colgante con hojas carnosas y colgantes, ideal para cestas colgantes.', 
            'Longitud: Hasta 60 cm. Hojas: Pequeñas, carnosas, verdes azuladas. Flores: Pequeñas, rosadas o rojas.', 
            'Hábitat: Zonas áridas. Origen: México y Honduras. Usos: Ornamental (cestas colgantes).', 
            3, 'Burros_Tail.jpg',

            'Echeveria', 'Echeveria elegans', 
            'La Echeveria elegans es una suculenta perenne con rosetas compactas de hojas carnosas y coloridas. Es popular en jardines de rocas y como planta de interior.', 
            'Diámetro: Hasta 15 cm. Hojas: Carrosas, verde pálido, en forma de roseta. Flores: Pequeñas, rosadas o rojas, en tallos largos.', 
            'Hábitat: Zonas áridas y semiáridas. Origen: México. Usos: Ornamental (jardines de rocas, suculentas).', 
            3, 'Echeveria.jpg',

            'Panda Plant', 'Kalanchoe tomentosa', 
            'El Kalanchoe tomentosa, conocido como planta panda, es una suculenta perenne con hojas peludas y bordes marrones, que le da un aspecto distintivo.', 
            'Altura: Hasta 45 cm. Hojas: Peludas, verdes con bordes marrones, ovaladas. Flores: Pequeñas, tubulares, de color marrón.', 
            'Hábitat: Zonas áridas. Origen: Madagascar. Usos: Ornamental (planta de interior).', 
            3, 'Panda_Plant.jpg',

            'String of Pearls', 'Senecio rowleyanus', 
            'El Senecio rowleyanus, conocido como rosario, es una suculenta colgante con hojas esféricas, que se asemejan a un collar de perlas.', 
            'Longitud: Hasta 90 cm. Hojas: Pequeñas, esféricas, verdes. Flores: Pequeñas, blancas, fragantes.', 
            'Hábitat: Zonas áridas. Origen: Sudáfrica. Usos: Ornamental (cestas colgantes).', 
            3, 'String_of_Pearls.jpg',

            'Christmas Cactus', 'Schlumbergera bridgesii', 
            'El cactus de Navidad es una planta epífita con tallos segmentados y flores coloridas que florecen en invierno.', 
            'Altura: Hasta 30 cm. Tallos: Segmentados, verdes. Flores: Grandes, rojas, rosadas, blancas o amarillas.', 
            'Hábitat: Bosques tropicales. Origen: Brasil. Usos: Ornamental (planta de interior, flores de invierno).', 
            3, 'Christmas_Cactus.jpg',

            'Golden Barrel Cactus', 'Echinocactus grusonii', 
            'El Echinocactus grusonii, conocido como cactus barril dorado, es una especie de cactus con forma esférica y espinas doradas.', 
            'Diámetro: Hasta 1 metro. Tallos: Esféricos, verdes, con costillas prominentes. Flores: Amarillas, en la cima del cactus.', 
            'Hábitat: Zonas áridas y semiáridas. Origen: México. Usos: Ornamental (jardines de cactus, xeriscaping).', 
            3, 'Golden_Barrel_Cactus.jpg',

            'Ghost Plant', 'Graptopetalum paraguayense', 
            'La Graptopetalum paraguayense, conocida como planta fantasma, es una suculenta perenne con hojas carnosas y una apariencia plateada o grisácea.', 
            'Diámetro: Hasta 20 cm. Hojas: Carnosas, grisáceas, dispuestas en rosetas. Flores: Pequeñas, blancas o amarillas.', 
            'Hábitat: Zonas áridas y semiáridas. Origen: México. Usos: Ornamental (jardines de rocas, suculentas).', 
            3, 'Ghost_Plant.jpg',

        //CARNIVORAS (4)

            'Lirio cobra', 'Darlingtonia californica', 
            'Altura: 30-100 cm. Hojas: Trampas en forma de urna, con una estructura en forma de capucha. Flores: Amarillas a púrpuras, solitarias, que emergen en primavera.', 
            'Conocida como lirio cobra, es una planta carnívora perenne nativa de América del Norte. Sus hojas se asemejan a una cobra con capucha, lo que le da su nombre común. Estas hojas forman trampas en forma de urna con una entrada bajo una "capucha", que engaña a los insectos para que entren.', 
            'Hábitat: Turberas y pantanos con agua fría y corriente. Origen: Noroeste de California y suroeste de Oregón, EE. UU. Usos: Ornamental en colecciones de plantas carnívoras.', 
            4, 'Lirio_Cobra.jpg',

            'Venus atrapamoscas', 'Dionaea muscipula', 
            'Altura: 5-10 cm. Hojas: Trampas en forma de concha con dientes marginales. Flores: Pequeñas, blancas, en racimos en tallos largos.', 
            'Comúnmente conocida como Venus atrapamoscas, es una planta carnívora famosa por sus hojas modificadas que actúan como trampas que se cierran rápidamente al detectar la presencia de insectos.', 
            'Hábitat: Suelos arenosos y húmedos en áreas de clima templado. Origen: Zonas costeras de Carolina del Norte y del Sur, EE. UU. Usos: Popular en horticultura como planta ornamental y de colección.', 
            4, 'Venus_atrapamoscas.jpg',

            'Planta arcoiris', 'Byblis spp', 
            'Altura: 10-50 cm. Hojas: Largas, delgadas, cubiertas de tricomas pegajosos. Flores: Violeta o rosadas, en racimos.', 
            'Conocidas como plantas arcoiris, son plantas carnívoras pequeñas que producen mucílago pegajoso en sus hojas, lo que les da un aspecto brillante y colorido bajo la luz.', 
            'Hábitat: Zonas húmedas y arenosas. Origen: Australia. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Planta_arcoiris.jpg',

            'Jarra de Australia', 'Cephalotus follicularis', 
            'Altura: 5-20 cm. Hojas: Trampas en forma de jarra con una tapa. Flores: Pequeñas, blancas, en racimos sobre tallos altos.', 
            'Conocido como jarra de Australia o planta jarra albina, es una planta carnívora perenne que produce pequeñas trampas en forma de jarra que se llenan de un líquido digestivo.', 
            'Hábitat: Zonas húmedas y arenosas cerca de la costa. Origen: Suroeste de Australia. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Jarra_de_Australia.jpg',

            'Drosera Sudafricana', 'Drosera regia', 
            'Altura: Hasta 60 cm. Hojas: Largas, lineales, cubiertas de tricomas glandulares. Flores: Rosadas a púrpuras, en racimos.', 
            'Conocida como la drosera real, es una planta carnívora perenne que se distingue por sus largas hojas lineales cubiertas de tricomas pegajosos.', 
            'Hábitat: Suelos húmedos y bien drenados. Origen: Sudáfrica. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Drosera_Sudafricana.jpg',

            'Pequeño Rocío del sol', 'Drosera uniflora', 
            'Altura: 5-10 cm. Hojas: Pequeñas, en rosetas basales. Flores: Pequeñas, blancas o rosadas, solitarias.', 
            'Conocida como pequeño rocío del sol, es una planta carnívora de tamaño pequeño, con hojas basales cubiertas de tricomas pegajosos.', 
            'Hábitat: Zonas húmedas y pantanosas. Origen: América del Sur. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Pequeño_Rocio_del_sol.jpg',

            'Rueda de Agua', 'Aldrovanda vesiculosa', 
            'Altura: 5-20 cm. Hojas: Trampas sumergidas, dispuestas en espiral. Flores: Pequeñas, blancas.', 
            'Conocida como rueda de agua, es una planta carnívora acuática que flota libremente y captura pequeños organismos acuáticos con sus trampas sumergidas.', 
            'Hábitat: Aguas dulces, estancadas o de lento movimiento. Origen: Distribución global, pero rara. Usos: Ornamental en acuarios y colecciones de plantas carnívoras.', 
            4, 'Rueda_de_Agua.jpg',

            'Drosophyllum', 'Drosophyllum lusitanicum', 
            'Altura: 20-40 cm. Hojas: Largas, estrechas, cubiertas de tricomas pegajosos. Flores: Amarillas, en racimos.', 
            'Conocido como drosophyllum o atrapamoscas portugués, es una planta carnívora perenne que se encuentra en suelos áridos y produce hojas cubiertas de mucílago pegajoso.', 
            'Hábitat: Suelos secos y arenosos. Origen: Península Ibérica y Marruecos. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Drosophyllum.jpg',

            'Heliamphora', 'Heliamphora spp', 
            'Altura: 10-50 cm. Hojas: Trampas en forma de jarra. Flores: Blancas a rosadas, en tallos altos.', 
            'Conocidas como plantas jarra de los tepuyes, son plantas carnívoras perennes que producen trampas en forma de jarra que acumulan agua de lluvia y enzimas digestivas.', 
            'Hábitat: Cumbres de tepuyes, en ambientes húmedos. Origen: Guayana venezolana y Brasil. Usos: Ornamental y en colecciones de plantas carnívoras.', 
            4, 'Heliamphora.jpg',

            'Rocío del sol común', 'Drosera rotundifolia', 
            'Altura: 5-15 cm. Hojas: Redondas, en rosetas basales, cubiertas de tricomas glandulares. Flores: Pequeñas, blancas o rosadas, en racimos.', 
            'Conocida como rocío del sol común, es una planta carnívora pequeña que se encuentra en suelos ácidos y húmedos. Sus hojas redondas están cubiertas de tricomas pegajosos que atrapan insectos.', 
            'Hábitat: Turberas y pantanos ácidos. Origen: Regiones templadas del hemisferio norte. Usos: Ornamental y en colecciones de plantas carnívoras, estudio botánico debido a su mecanismo de captura.', 
            4, 'Rocio_del_sol_comun.jpg',

        // COLOMBIANAS (5)

            'Orquídea', 'Cattleya trianae', 
            'La Cattleya trianae es la flor nacional de Colombia, una orquídea epífita conocida por sus grandes y vistosas flores. Presenta una gama de colores que va del blanco al rosa, con una garganta distintiva que suele ser de un color más intenso.', 
            'Altura: 30-60 cm. Hojas: Elípticas, carnosas y verdes. Flores: Grandes, vistosas, de 10-20 cm de diámetro, colores variados con un labio contrastante.', 
            'Hábitat: Bosques húmedos de montaña. Origen: Endémica de Colombia. Usos: Ornamental y en horticultura.', 
            5, 'Orquidea.jpg',

            'Café', 'Coffea arabica', 
            'Coffea arabica es un arbusto perenne conocido por producir los granos de café más apreciados del mundo. Tiene hojas brillantes y flores blancas fragantes.', 
            'Altura: 2-5 metros. Hojas: Elípticas, verdes, brillantes. Flores: Pequeñas, blancas, fragantes.', 
            'Hábitat: Zonas montañosas y tropicales. Origen: Etiopía, pero ampliamente cultivada en Colombia. Usos: Producción de granos de café para consumo humano.', 
            5, 'Cafe.jpg',

            'Palma de cera', 'Ceroxylon quindiuense', 
            'La palma de cera es la palma más alta del mundo y es el árbol nacional de Colombia. Tiene un tronco delgado cubierto de cera y hojas largas y plumosas.', 
            'Altura: Hasta 60 metros. Hojas: Pinnadas, largas, verdes. Tronco: Delgado, cubierto de cera.', 
            'Hábitat: Andes colombianos. Origen: Endémica de Colombia. Usos: Ornamental, cera del tronco usada tradicionalmente.', 
            5, 'Palma_de_cera.jpg',

            'Guadua', 'Guadua angustifolia', 
            'Guadua angustifolia es una especie de bambú gigante, conocida por su rápido crecimiento y su resistencia. Es una planta clave en la construcción sostenible en Colombia.', 
            'Altura: Hasta 30 metros. Hojas: Lanceoladas, verdes. Tallos: Cilíndricos, huecos y resistentes.', 
            'Hábitat: Bosques húmedos tropicales. Origen: América Central y del Sur, ampliamente distribuida en Colombia. Usos: Construcción, artesanía, y conservación del suelo.', 
            5, 'Guadua.jpg',

            'Yopo', 'Anadenanthera peregrina', 
            'El yopo es un árbol conocido por sus semillas, que contienen alcaloides potentes y se usan tradicionalmente en rituales indígenas.', 
            'Altura: Hasta 20 metros. Hojas: Bipinnadas, verdes. Flores: Pequeñas, en racimos.', 
            'Hábitat: Zonas tropicales y subtropicales. Origen: América del Sur. Usos: Ritualístico, medicina tradicional.', 
            5, 'Yopo.jpg',

            'Borrachero', 'Brugmansia suaveolens', 
            'El borrachero es un arbusto o pequeño árbol conocido por sus grandes flores colgantes en forma de trompeta, que son muy fragantes pero tóxicas.', 
            'Altura: 3-11 metros. Hojas: Ovaladas, grandes, verdes. Flores: Grandes, colgantes, en forma de trompeta, blancas o amarillas.', 
            'Hábitat: Zonas tropicales y subtropicales. Origen: América del Sur. Usos: Ornamental, usos tradicionales en medicina y rituales (tóxico).', 
            5, 'Borrachero.jpg',

            'Frailejón', 'Espeletia grandiflora', 
            'El frailejón es una planta perenne que se encuentra en los páramos andinos, conocida por su aspecto robusto y su capacidad para almacenar agua.', 
            'Altura: 0.5-2 metros. Hojas: Peludas, dispuestas en roseta. Flores: Amarillas, similares a las margaritas.', 
            'Hábitat: Páramos andinos. Origen: Andes de Colombia, Ecuador y Venezuela. Usos: Conservación del agua, medicina tradicional.', 
            5, 'Frailejon.jpg',

            'Cocotero', 'Cocos nucifera', 
            'El cocotero es una palma conocida por sus frutos, los cocos, que son fuente de alimento, bebida y materiales.', 
            'Altura: Hasta 30 metros. Hojas: Pinnadas, largas. Frutos: Cocos, con una cáscara dura y pulpa comestible.', 
            'Hábitat: Zonas costeras tropicales. Origen: Probablemente del sudeste asiático, ampliamente distribuido en zonas tropicales. Usos: Alimentación (agua y pulpa de coco), aceite de coco, fibra de coco.', 
            5, 'Cocotero.jpg',

            'Achira', 'Canna indica', 
            'La achira es una planta perenne con grandes hojas verdes y flores vistosas, conocida por sus rizomas comestibles.', 
            'Altura: 1-2 metros. Hojas: Grandes, verdes, lanceoladas. Flores: Rojas, amarillas o naranjas.', 
            'Hábitat: Zonas tropicales y subtropicales. Origen: América tropical. Usos: Alimentación (rizomas comestibles), ornamental, medicina tradicional.', 
            5, 'Achira.jpg',

            'Uchuva', 'Physalis peruviana', 
            'La uchuva es una planta perenne conocida por sus frutos pequeños, redondos y amarillos, que están envueltos en una cáscara papirácea.', 
            'Altura: 1-2 metros. Hojas: Ovaladas, ligeramente peludas. Frutos: Amarillos, redondos, envueltos en una cáscara papirácea.', 
            'Hábitat: Zonas montañosas y subtropicales. Origen: Andes de Sudamérica. Usos: Alimentación (frutos comestibles), medicina tradicional (rico en vitaminas y antioxidantes).', 
            5, 'Uchuva.jpg',

        // INTERIORES (6)

            'Pothos', 'Epipremnum aureum', 
            'El pothos es una planta perenne trepadora y colgante, conocida por sus hojas en forma de corazón, verdes con manchas amarillas o blancas. Es muy popular como planta de interior por su resistencia y facilidad de cuidado.', 
            'Altura: Hasta 2 metros (cuando trepa). Hojas: Perennes, en forma de corazón, verdes con variegaciones amarillas o blancas. Flores: Raras en cultivo; pequeñas y blancas.', 
            'Hábitat: Bosques tropicales. Origen: Islas Salomón. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: Moderadamente tóxica si se ingiere, puede causar irritación oral y vómitos.', 
            6, 'Pothos.jpg',

            'Ficus Lira', 'Ficus lyrata', 
            'El ficus lira es un árbol de hoja perenne con grandes hojas en forma de violín. Es apreciado como planta de interior por su porte elegante y sus hojas vistosas.', 
            'Altura: Hasta 3 metros en interiores. Hojas: Grandes, coriáceas, en forma de violín, verdes brillantes. Flores: Pequeñas y no vistosas.', 
            'Hábitat: Bosques tropicales. Origen: África occidental. Usos: Ornamental (planta de interior). Toxicidad: Savia lechosa puede causar irritación en la piel.', 
            6, 'Ficus_lira.jpg',

            'Palmera de Salón', 'Chamaedorea elegans', 
            'La palmera de salón es una planta perenne de crecimiento lento, conocida por sus frondas elegantes y su adaptabilidad a condiciones de poca luz.', 
            'Altura: Hasta 2 metros en interiores. Hojas: Pinnadas, verdes y brillantes. Flores: Pequeñas, amarillas, en racimos.', 
            'Hábitat: Bosques tropicales y subtropicales. Origen: México y Guatemala. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: No tóxica.', 
            6, 'Palmera_de_salon.jpg',

            'Lirio de la Paz', 'Spathiphyllum wallisii', 
            'El lirio de la paz es una planta perenne con hojas brillantes y flores blancas en forma de espata. Es popular por su capacidad para florecer en condiciones de poca luz.', 
            'Altura: Hasta 1 metro. Hojas: Lanceoladas, verdes y brillantes. Flores: Blancas, en forma de espata, rodeando un espádice.', 
            'Hábitat: Bosques tropicales. Origen: América Central y del Sur. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: Moderadamente tóxica si se ingiere, puede causar irritación oral y vómitos.', 
            6, 'Lirio_de_la_paz.jpg',

            'Helecho de Boston', 'Nephrolepis exaltata', 
            'El helecho de Boston es una planta perenne con frondas largas y arqueadas. Es apreciado por su capacidad de purificar el aire y su resistencia a la poca luz.', 
            'Altura: Hasta 1 metro. Frondas: Largas, pinnadas, verdes. Reproducción: Mediante esporas.', 
            'Hábitat: Bosques tropicales. Origen: América del Norte, Central y del Sur. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: No tóxica.', 
            6, 'Helecho_de_boston.jpg',

            'Lengua de Suegra', 'Sansevieria trifasciata', 
            'La lengua de suegra es una planta perenne con hojas erectas, duras y variegadas. Es muy resistente y puede tolerar condiciones de poca luz y sequía.', 
            'Altura: Hasta 1 metro. Hojas: Erectas, coriáceas, verdes con bandas transversales grisáceas o amarillas. Flores: Pequeñas, blancas, en racimos (raras en interiores).', 
            'Hábitat: Zonas áridas y semiáridas. Origen: África occidental. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: Moderadamente tóxica si se ingiere, puede causar náuseas y vómitos.', 
            6, 'Lengua_de_suegra.jpg',

            'Filodendro', 'Philodendron hederaceum', 
            'El filodendro es una planta trepadora o colgante con hojas en forma de corazón, muy popular como planta de interior por su facilidad de cuidado y resistencia.', 
            'Altura: Hasta 3 metros (cuando trepa). Hojas: Corazón, verdes y brillantes. Flores: Pequeñas, no vistosas.', 
            'Hábitat: Bosques tropicales. Origen: América Central y del Sur. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: Moderadamente tóxica si se ingiere, puede causar irritación oral y vómitos.', 
            6, 'Filodendro.jpg',

            'Cinta', 'Chlorophytum comosum', 
            'La cinta es una planta perenne con hojas largas y arqueadas, verdes con franjas blancas. Es muy popular como planta de interior por su facilidad de cuidado y capacidad para purificar el aire.', 
            'Altura: Hasta 60 cm. Hojas: Lineales, verdes con franjas blancas. Flores: Pequeñas, blancas, en racimos.', 
            'Hábitat: Bosques tropicales y subtropicales. Origen: África del Sur. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: No tóxica.', 
            6, 'Cinta.jpg',

            'Hiedra Inglesa', 'Hedera helix', 
            'La hiedra inglesa es una planta trepadora perenne con hojas lobuladas. Es muy utilizada como planta de interior por su capacidad para crecer en condiciones de poca luz.', 
            'Altura: Hasta 20 metros (cuando trepa). Hojas: Lobuladas, verdes con variegaciones blancas o amarillas. Flores: Pequeñas, verdes, en umbelas.', 
            'Hábitat: Bosques y matorrales. Origen: Europa, África del Norte y Asia Occidental. Usos: Ornamental (planta de interior), purificación del aire. Toxicidad: Moderadamente tóxica si se ingiere, puede causar irritación oral y vómitos.', 
            6, 'Hiedra_inglesa.jpg',

            'Calathea', 'Calathea spp.', 
            'Las calatheas son plantas perennes conocidas por sus hojas vistosas y patrones únicos. Son apreciadas como plantas de interior por su belleza y tolerancia a condiciones de poca luz.', 
            'Altura: Hasta 1 metro. Hojas: Grandes, ovaladas, con patrones distintivos y colores variados. Flores: Pequeñas, no vistosas.', 
            'Hábitat: Bosques tropicales. Origen: América Central y del Sur. Usos: Ornamental (planta de interior). Toxicidad: No tóxica.', 
            6, 'Calathea.jpg',

        // MEDICINALES (7)

            'Alcachofa', 'Cynara scolymus', 
            'La alcachofa es una planta perenne de la familia Asteraceae, cultivada por sus capullos comestibles. Sus hojas verdes y espinosas se utilizan con fines medicinales y culinarios.', 
            'Uso medicinal: La alcachofa se utiliza tradicionalmente para mejorar la salud hepática y digestiva, promover la digestión y reducir el colesterol.', 
            'Origen: Regiones mediterráneas. Usos específicos: Se consume como infusión, extracto o en forma de suplementos dietéticos para tratar trastornos digestivos y hepáticos.', 
            7, 'Alcachofa.jpg',

            'Borraja', 'Borago officinalis', 
            'La borraja es una planta anual o bienal de la familia Boraginaceae, conocida por sus flores azules y hojas peludas. Tanto las hojas como las flores se utilizan con fines medicinales y culinarios.', 
            'Uso medicinal: La borraja se utiliza tradicionalmente para promover la salud cardiovascular, aliviar la inflamación y mejorar la piel.', 
            'Origen: Europa y el Mediterráneo. Usos específicos: Se consume como infusión, tintura o en forma de aceite para tratar afecciones inflamatorias, mejorar la salud de la piel y apoyar la salud cardiovascular.', 
            7, 'Borraja.jpg',

            'Aloe Vera', 'Aloe Vera', 
            'El aloe vera es una planta suculenta perenne de la familia Asphodelaceae, conocida por su gel transparente en las hojas. Se utiliza ampliamente en la medicina tradicional y en productos de cuidado personal.', 
            'Uso medicinal: El gel de aloe vera se utiliza externamente para aliviar quemaduras, cortes, picaduras de insectos y otras irritaciones de la piel.', 
            'Origen: África del Norte y regiones del Mediterráneo. Usos específicos: El gel de aloe vera se aplica tópicamente en la piel para aliviar quemaduras, cortes, quemaduras solares y otras irritaciones cutáneas.', 
            7, 'Aloe_Vera.jpg',

            'Anís', 'Pimpinella anisum', 
            'El anís es una planta anual de la familia Apiaceae, conocida por sus pequeñas semillas aromáticas que se utilizan en la cocina y en la medicina tradicional.', 
            'Uso medicinal: El anís se utiliza tradicionalmente para aliviar problemas digestivos como gases, hinchazón y malestar estomacal.', 
            'Origen: Regiones del Mediterráneo oriental y Asia occidental. Usos específicos: Se consume como infusión, tintura o en forma de aceite esencial para aliviar problemas digestivos y mejorar la salud respiratoria.', 
            7, 'Anis.jpg',

            'Caléndula', 'Calendula officinalis', 
            'La caléndula es una planta anual o perenne de la familia Asteraceae, conocida por sus flores amarillas o naranjas brillantes. Tanto las flores como las hojas se utilizan con fines medicinales.', 
            'Uso medicinal: La caléndula se utiliza tradicionalmente para aliviar la inflamación, promover la cicatrización de heridas y calmar la piel irritada.', 
            'Origen: Europa meridional y el Mediterráneo. Usos específicos: Se utiliza tópicamente en forma de ungüentos, cremas y cataplasmas para tratar quemaduras, cortes, dermatitis y otras afecciones de la piel.', 
            7, 'Calendula.jpg',

            'Eucalipto', 'Eucalyptus globulus', 
            'El eucalipto es un árbol perenne de la familia Myrtaceae, conocido por su aroma distintivo y sus propiedades medicinales. Las hojas se utilizan con fines medicinales.', 
            'Uso medicinal: El eucalipto se utiliza tradicionalmente para aliviar la congestión nasal, promover la salud respiratoria y aliviar el dolor muscular.', 
            'Origen: Australia y Tasmania. Usos específicos: Las hojas se pueden utilizar para hacer infusiones, vaporizaciones, ungüentos y aceites esenciales para tratar afecciones respiratorias, dolores musculares y problemas de la piel.', 
            7, 'Eucalipto.jpg',

            'Jengibre', 'Zingiber officinale', 
            'El jengibre es una planta perenne de la familia Zingiberaceae, conocida por su rizoma aromático y picante. Tanto el rizoma como la raíz se utilizan con fines medicinales y culinarios.', 
            'Uso medicinal: El jengibre se utiliza tradicionalmente para aliviar las náuseas, mejorar la digestión, reducir la inflamación y promover la salud cardiovascular.', 
            'Origen: Asia tropical. Usos específicos: Se consume fresco, seco o en forma de té, infusiones, cápsulas y extractos para tratar problemas digestivos, náuseas, dolores menstruales, inflamación y mejorar la circulación sanguínea.', 
            7, 'Jengibre.jpg',

            'Linaza', 'Linum usitatissimum', 
            'La linaza es una planta anual de la familia Linaceae, cultivada por sus semillas ricas en ácidos grasos omega-3, fibra y otros nutrientes. Tanto las semillas como el aceite se utilizan con fines medicinales y culinarios.', 
            'Uso medicinal: La linaza se utiliza tradicionalmente para aliviar el estreñimiento, reducir el colesterol, y mejorar la salud digestiva y cardiovascular. También se considera beneficiosa para la salud de la piel y el equilibrio hormonal.', 
            'Origen: Región del Mediterráneo y Asia occidental. Usos específicos: Las semillas de linaza se consumen enteras, molidas o en forma de aceite. Se añaden a batidos, cereales, panes y otros alimentos para aumentar el contenido de fibra y omega-3. También se utiliza en suplementos dietéticos para mejorar la digestión y la salud cardiovascular.', 
            7, 'Linaza.jpg',

            'Manzanilla', 'Matricaria recutita', 
            'La manzanilla es una planta herbácea anual de la familia Asteraceae, conocida por sus pequeñas flores blancas y su agradable aroma. Las flores se utilizan con fines medicinales.', 
            'Uso medicinal: La manzanilla se utiliza tradicionalmente para calmar los nervios, aliviar problemas digestivos, tratar inflamaciones y promover el sueño.', 
            'Origen: Europa y Asia occidental. Usos específicos: Se consume en forma de té, infusiones, extractos y aceites esenciales para tratar la ansiedad, el insomnio, los trastornos digestivos, las inflamaciones y las irritaciones de la piel. También se utiliza en productos de cuidado personal por sus propiedades calmantes y antiinflamatorias.', 
            7, 'Manzanilla.jpg',

            'Noni', 'Morinda citrifolia', 
            'El noni es un árbol perenne de la familia Rubiaceae, conocido por sus frutos verdes, amarillentos o blanquecinos que se utilizan con fines medicinales.', 
            'Uso medicinal: El noni se utiliza tradicionalmente para fortalecer el sistema inmunológico, mejorar la digestión, reducir el dolor y la inflamación, y promover la salud general.', 
            'Origen: Regiones del sudeste asiático y Australasia. Usos específicos: El jugo de noni se consume como suplemento dietético para mejorar la inmunidad, la digestión y la salud general. También se utiliza en forma de cápsulas, extractos y productos tópicos para tratar diversas afecciones de salud y mejorar la energía y el bienestar general.', 
            7, 'Noni.jpg',

        // TÓXICOS (8)

            'Dedalera', 'Digitalis purpurea', 
            'La dedalera es una planta bienal con tallos altos y flores tubulares, conocidas por su belleza y toxicidad. Produce glucósidos cardíacos utilizados en medicina bajo estricta supervisión médica.', 
            'Altura: 60-150 cm. Hojas: Lanceoladas, rugosas, verdes. Flores: Tubulares, púrpuras con manchas, en espigas largas.', 
            'Hábitat: Bosques y praderas. Origen: Europa y Asia occidental. Usos: Medicinal (tratamiento de enfermedades cardíacas), ornamental. Toxicidad: Puede causar arritmias cardíacas, náuseas, vómitos y muerte si se ingiere.', 
            8, 'Dedalera.jpg',

            'Belladona', 'Atropa belladonna', 
            'La belladona es una planta perenne con hojas anchas y bayas negras. Contiene alcaloides altamente tóxicos como la atropina.', 
            'Altura: 1-2 metros. Hojas: Ovaladas, verdes. Flores: Tubulares, moradas o verdes. Frutos: Bayas negras y brillantes.', 
            'Hábitat: Bosques y matorrales. Origen: Europa, norte de África y Asia occidental. Usos: Medicinal (dilatación de las pupilas, antiespasmódico), ornamental. Toxicidad: Puede causar delirios, alucinaciones, coma y muerte.', 
            8, 'Belladona.jpg',

            'Estramonio', 'Datura stramonium', 
            'El estramonio es una planta anual con hojas grandes y flores blancas en forma de trompeta. Es conocido por sus efectos alucinógenos y tóxicos.', 
            'Altura: 30-150 cm. Hojas: Ovaladas, dentadas, verdes. Flores: Blancas, en forma de trompeta. Frutos: Cápsulas espinosas.', 
            'Hábitat: Suelos perturbados, campos y bordes de caminos. Origen: América Central y del Norte. Usos: Medicinal (antiespasmódico), ornamental. Toxicidad: Puede causar delirios, alucinaciones, convulsiones y muerte.', 
            8, 'Estramonio.jpg',

            'Tejo', 'Taxus baccata', 
            'El tejo es un árbol perenne con hojas aciculares y bayas rojas. Todas las partes de la planta, excepto la arilo rojo, son extremadamente tóxicas.', 
            'Altura: Hasta 20 metros. Hojas: Aciculares, verdes oscuras. Flores: Pequeñas y no vistosas. Frutos: Bayas rojas con una semilla venenosa.', 
            'Hábitat: Bosques y jardines. Origen: Europa, norte de África y Asia occidental. Usos: Ornamental, medicinal (quimioterapia). Toxicidad: Puede causar insuficiencia cardíaca, parálisis y muerte.', 
            8, 'Tejo.jpg',

            'Adelfa', 'Nerium oleander', 
            'La adelfa es un arbusto perenne con hojas estrechas y flores vistosas. Es altamente tóxica y contiene glucósidos cardíacos.', 
            'Altura: 2-6 metros. Hojas: Lanceoladas, verdes. Flores: Grandes, rosadas, blancas o rojas.', 
            'Hábitat: Zonas mediterráneas y climas templados. Origen: Región mediterránea y Asia. Usos: Ornamental. Toxicidad: Puede causar arritmias cardíacas, náuseas, vómitos y muerte.', 
            8, 'Adelfa.jpg',

            'Ricinus', 'Ricinus communis', 
            'El ricinus es una planta perenne con grandes hojas palmeadas y semillas extremadamente tóxicas que contienen ricina.', 
            'Altura: Hasta 3 metros. Hojas: Grandes, palmeadas, verdes o púrpuras. Flores: Pequeñas, no vistosas. Frutos: Cápsulas espinosas con semillas tóxicas.', 
            'Hábitat: Regiones tropicales y subtropicales. Origen: África tropical. Usos: Ornamental, producción de aceite de ricino. Toxicidad: Las semillas pueden causar náuseas, vómitos, diarrea, fallo renal y muerte.', 
            8, 'Ricinus.jpg',

            'Hortensia', 'Hydrangea macrophylla', 
            'La hortensia es un arbusto perenne con grandes inflorescencias globulares. Contiene compuestos cianogénicos que pueden ser tóxicos si se ingieren.', 
            'Altura: 1-3 metros. Hojas: Grandes, ovaladas, verdes. Flores: Grandes, rosadas, azules, blancas o púrpuras, en inflorescencias globulares.', 
            'Hábitat: Jardines y parques. Origen: Japón y China. Usos: Ornamental. Toxicidad: Puede causar náuseas, vómitos, dolor abdominal y dificultad respiratoria.', 
            8, 'Hortensia.jpg',

            'Aro', 'Arum maculatum', 
            'El aro es una planta herbácea perenne con hojas en forma de flecha y espádices florales. Contiene oxalatos de calcio que son tóxicos.', 
            'Altura: 30-60 cm. Hojas: En forma de flecha, verdes con manchas oscuras. Flores: Espádices rodeados de espatas blancas o verdes.', 
            'Hábitat: Bosques y praderas húmedas. Origen: Europa y Asia occidental. Usos: Ornamental. Toxicidad: Puede causar irritación oral, hinchazón, dolor y dificultad respiratoria.', 
            8, 'Aro.jpg',

            'Dieffenbachia', 'Dieffenbachia seguine', 
            'La Dieffenbachia es una planta perenne con hojas grandes y vistosas. Es popular como planta de interior pero contiene cristales de oxalato de calcio tóxicos.', 
            'Altura: 1-2 metros. Hojas: Grandes, verdes con manchas blancas o amarillas. Flores: Pequeñas, no vistosas, en espádices.', 
            'Hábitat: Zonas tropicales y subtropicales. Origen: América Central y del Sur. Usos: Ornamental (planta de interior). Toxicidad: Puede causar irritación oral, hinchazón, dolor y dificultad para hablar.', 
            8, 'Dieffenbachia.jpg',

            'Cicuta', 'Conium maculatum', 
            'La cicuta es una planta bienal con hojas pinnadas y pequeñas flores blancas. Es extremadamente tóxica y contiene alcaloides como la coniína.', 
            'Altura: 1-2 metros. Hojas: Pinnadas, verdes. Flores: Pequeñas, blancas, en umbelas compuestas.', 
            'Hábitat: Bordes de caminos, praderas y áreas perturbadas. Origen: Europa y norte de África. Usos: Históricamente utilizada en medicina (hoy en desuso). Toxicidad: Puede causar parálisis muscular, insuficiencia respiratoria y muerte.', 
            8, 'Cicuta.jpg',
            ],
        ];

        $numeroPlantas = count($plantas);

        for ($i = 0; $i < $numeroPlantas; $i++) {
            
            $datosPlanta = [];

            foreach ($columnas as $index => $columna) {
                
                $datosPlanta[$columna] = $plantas[$i][$index];
            }

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