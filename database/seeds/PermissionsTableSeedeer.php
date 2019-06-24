<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'pdf_create']);
        Permission::create(['name' => 'pdf_edit']);
        Permission::create(['name' => 'pdf_delete']);
        Permission::create(['name' => 'pdf_show']);

        Permission::create(['name' => 'categorias_create']);
        Permission::create(['name' => 'categorias_edit']);
        Permission::create(['name' => 'categorias_delete']);
        Permission::create(['name' => 'categorias_show']);
        
    }
}
