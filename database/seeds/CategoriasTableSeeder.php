<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
        $categoria = new Categoria;
        $categoria->nombre = "Derechos sociales y económicos";
        $categoria->save();


        $categoria = new Categoria;
        $categoria->nombre = "Derechos políticos";
        $categoria->save();

        $categoria = new Categoria;
        $categoria->nombre = "Derechos de los débiles";
        $categoria->save();

        $categoria = new Categoria;
        $categoria->nombre = "Derechos de los pueblos";
        $categoria->save();


    }
}