<?php

use Illuminate\Database\Seeder;
use App\DepartmentFormat;
class DepartmentFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DepartmentFormat::create([
            'name' => 'Contabilidad',
        ]);

        DepartmentFormat::create([
            'name' => 'IT',
        ]);

        DepartmentFormat::create([
            'name' => 'Consultoria',
        ]);
    }
}
