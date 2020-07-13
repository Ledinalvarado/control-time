<?php

use Illuminate\Database\Seeder;
use App\CompanyDepartmentFormat;
class CompanyDepartmentFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyDepartmentFormat::create([
           'company_id' => 1,
           'department_id' => 1,
        ]);

        CompanyDepartmentFormat::create([
            'company_id' => 2,
            'department_id' => 2,
        ]);
    }
}
