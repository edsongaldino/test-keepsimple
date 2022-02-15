<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_models')->delete();
        $types = array(
          array('id' => 1,'vehicle_brand_id' => 1, 'name' => 'Ka'),
          array('id' => 2,'vehicle_brand_id' => 1, 'name' => 'Fiesta'),
          array('id' => 3,'vehicle_brand_id' => 2,'name' => 'A3'),
          array('id' => 4,'vehicle_brand_id' => 2,'name' => 'TT'),
          array('id' => 5,'vehicle_brand_id' => 3,'name' => 'Celta'),
          array('id' => 6,'vehicle_brand_id' => 3,'name' => 'Prisma'),
          array('id' => 7,'vehicle_brand_id' => 4,'name' => 'Argo'),
          array('id' => 8,'vehicle_brand_id' => 4,'name' => 'Uno')
        );
        DB::table('vehicle_models')->insert($types);
    }
}
