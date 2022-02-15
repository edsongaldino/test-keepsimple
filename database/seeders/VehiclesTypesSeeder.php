<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->delete();
        $types = array(
          array('id' => 1,'name' => 'Moto', 'icon' => 'motorcycle'),
          array('id' => 2,'name' => 'Carro', 'icon' => 'car'),
          array('id' => 3,'name' => 'Caminhão', 'icon' => 'truck')
        );
        DB::table('vehicle_types')->insert($types);
    }
}
