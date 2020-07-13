<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Admin
        User::create([
            'name' => 'Jhon',
            'email' => 'admin20@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 0
        ]);

        //Gerente
        User::create([
            'name' => 'Matt',
            'email' => 'manager20@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1
        ]);

        // Colaborador
        User::create([
            'name' => 'Jane',
            'email' => 'colab@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 2
        ]);
    }
}
