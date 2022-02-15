<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_brands')->delete();
        $types = array(
          array('id' => 1,'name' => 'Ford'),
          array('id' => 2,'name' => 'Audi'),
          array('id' => 3,'name' => 'Chevrolet'),
          array('id' => 4,'name' => 'Fiat')
        );
        DB::table('vehicle_brands')->insert($types);
    }
}
