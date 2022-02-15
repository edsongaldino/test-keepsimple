<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->delete();
        $vehicles = array(
          array('id' => 1,'user_id' => 1, 'vehicle_type_id' =>  2, 'vehicle_model_id' => 1, 'name' => 'Ka', 'version' => '2022'),
          array('id' => 2,'user_id' => 1, 'vehicle_type_id' =>  2, 'vehicle_model_id' => 3, 'name' => 'Fiesta', 'version' => '2022'),
          array('id' => 3,'user_id' => 1, 'vehicle_type_id' =>  3, 'vehicle_model_id' => 2, 'name' => 'Corsa', 'version' => '2022'),
          array('id' => 4,'user_id' => 1, 'vehicle_type_id' =>  1, 'vehicle_model_id' => 4, 'name' => 'Uno', 'version' => '2022'),
          array('id' => 5,'user_id' => 2, 'vehicle_type_id' =>  2, 'vehicle_model_id' => 1, 'name' => 'Palio', 'version' => '2022'),
          array('id' => 6,'user_id' => 2, 'vehicle_type_id' =>  2, 'vehicle_model_id' => 3, 'name' => 'Audi', 'version' => '2022'),
          array('id' => 7,'user_id' => 2, 'vehicle_type_id' =>  3, 'vehicle_model_id' => 2, 'name' => 'Logan', 'version' => '2022'),
          array('id' => 8,'user_id' => 2, 'vehicle_type_id' =>  1, 'vehicle_model_id' => 4, 'name' => 'Prisma', 'version' => '2022'),
        );
        DB::table('vehicles')->insert($vehicles);
    }
}