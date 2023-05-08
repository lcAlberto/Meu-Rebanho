<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FarmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("farms")->insert([
            /*ROOT's FARM*/
            [
                'name' => 'Estância Procriare',
                'postal_code' => '85012040',
                'state_id' => 41,
                'city_id' => 4109401,
//                'user_id' => 1
            ],
        ]);
    }
}
