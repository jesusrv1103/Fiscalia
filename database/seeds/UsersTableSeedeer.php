<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\User;
class UsersTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = User::create([
            'name' => 'Jesus Ramirez Vargas',
            'email' => 'jesus21c.jrv@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $user->assignRole('administrador');


       $user= User::create([
            'name' => 'Juan  Acosta Muñoz',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);

        $user->assignRole('fiscal');

        
    }
}
