<?php

use Illuminate\Database\Seeder;
use App\Activity;
class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
           'name' => 'Actividad1',
           'category_id' => 2,
           'tipo_actividad' => 'CARGABLE',
        ]);

        Activity::create([
            'name' => 'Actividad2',
            'category_id' => 1,
            'tipo_actividad' => 'CARGABLE',
        ]);
    }
}
