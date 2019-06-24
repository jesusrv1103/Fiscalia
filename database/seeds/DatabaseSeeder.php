<?php

use Illuminate\Database\Seeder;
use App\Repositories\User\EloquentUserRepository;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeedeer::class);
        $this->call(RolesTableSeedeer::class);
        $this->call(UsersTableSeedeer::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(RecursosDigitalesTableSeeder::class);

    }
}
