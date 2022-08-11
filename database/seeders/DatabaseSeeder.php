<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        
        User::create([
        //     'name'	=> 'Admin',
        //     'email'	=> 'admin@gmail.com',
        //     'role'  => '0',
        //     'password'	=> bcrypt('passwordadmin')
        // ],[
            'name'	=> 'Nailah',
            'email'	=> 'nailah@gmail.com',
            'role'  => '1',
            'password'	=> bcrypt('nailah123')
        ]);

        // User::create([
        //     'name'	=> 'User',
        //     'email'	=> 'user@gmail.com',
        //     'role'  => '1',
        //     'password'	=> bcrypt('passworduser')
        // ]);
    }
}