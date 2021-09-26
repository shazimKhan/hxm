<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\UserRolesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(AddLeaveTypes::class);
    }
}
