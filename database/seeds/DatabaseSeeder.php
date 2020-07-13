<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
         $this->call(DepartmentFormatSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(ActivitySeeder::class);
         $this->call(CompanySeeder::class);
         $this->call(CompanyDepartmentFormatSeeder::class);

    }
}

