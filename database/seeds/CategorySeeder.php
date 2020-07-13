<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Categoria A',
            'department_format_id' => 1,
        ]);

        Category::create([
            'name' => 'Categoria B',
            'department_format_id' => 2,
        ]);

        Category::create([
            'name' => 'Categoria C',
            'department_format_id' => 1,
        ]);
    }
}
