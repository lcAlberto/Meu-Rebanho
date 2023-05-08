<?php
//namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(\Database\Seeders\PermissionsTableSeeder::class);
        $this->call(\Database\Seeders\RolesTableSeeder::class);
        $this->call(\Database\Seeders\StatesTableSeeder::class);
        $this->call(\Database\Seeders\CitiesTableSeeder::class);
        $this->call(\Database\Seeders\FarmsTableSeeder::class);
//        $this->call(\Database\Seeders\AdminUsersTableSeeder::class);
    }
}
