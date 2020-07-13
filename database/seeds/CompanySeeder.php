<?php

use Illuminate\Database\Seeder;
use App\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'Dell',
        ]);

        Company::create([
            'name' => 'Mac',
        ]);

        Company::create([
            'name' => 'Microsoft',
        ]);
    }
}
