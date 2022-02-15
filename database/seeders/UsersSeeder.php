<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = array(
          array('id' => 1,'name' => 'User', 'email' => 'user@keepsimple.com', 'password' => bcrypt('keepsimple')),
          array('id' => 2,'name' => 'Edson Galdino', 'email' => 'edsongaldino@outlook.com', 'password' => bcrypt('roc3t5nk'))
        );
        DB::table('users')->insert($users);
    }
}
