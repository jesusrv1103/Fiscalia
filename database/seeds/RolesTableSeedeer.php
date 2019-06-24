<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $role = Role::create(['name' => 'administrador']);
        $role->givePermissionTo('pdf_create','pdf_edit', 'pdf_delete', 'pdf_show','categorias_create','categorias_edit', 'categorias_delete', 'categorias_show');

 
        $role = Role::create(['name' => 'fiscal']);
        $role->givePermissionTo('pdf_show','categorias_show');

        
    }
}
