<?php

use Illuminate\Database\Seeder;
use App\RecursoDigital;
use Illuminate\Foundation\Console\Presets\React;

class RecursosDigitalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecursoDigital::truncate();
        $recursoDigital = new RecursoDigital();
        $recursoDigital->titulo = "Articulo 4";
        $recursoDigital->descripcion = "Artículo 4°.- El varón y la mujer son iguales ante la ley. Esta protegerá la organización y el desarrollo de la familia.";
        $recursoDigital->archivo="";
        $recursoDigital->categoria_id=1;
        $recursoDigital->save();

        $recursoDigital = new RecursoDigital();
        $recursoDigital->titulo = "Articulo 23";
        $recursoDigital->descripcion = "(artículo 21), en el Pacto Internacional de Derechos Civiles y Políticos (artículo ... lo XX) y en la Convención Americana sobre Derechos Humanos (artículo 23).";
        $recursoDigital->archivo="";
        $recursoDigital->categoria_id=2;
        $recursoDigital->save();

        $recursoDigital = new RecursoDigital();
        $recursoDigital->titulo = "Articulo 25";
        $recursoDigital->descripcion = "El artículo 25 de nuestra Constitución dice que “las penas privativas de libertad ... son los débiles a los que debe dar máximas garantías el Derecho Penal.";
        $recursoDigital->archivo="";
        $recursoDigital->categoria_id=3;
        $recursoDigital->save();
        
        $recursoDigital = new RecursoDigital();
        $recursoDigital->titulo = "Articulo 84";
        $recursoDigital->descripcion = "El Estado reconocerá y garantizará a los pueblos indígenas, de conformidad con esta Constitución y la ley, el respeto al orden público y a los derechos humanos, los siguientes derechos colectivos a los pueblos indígenas.";
        $recursoDigital->archivo="";
        $recursoDigital->categoria_id=4;
        $recursoDigital->save();

    }
}
