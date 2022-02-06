<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert([
            [
            'name' => 'Admin ',
            'email' => 'admin@hxm.com',
            'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Employee',
                'email' => 'employee@hxm.com',
                'password' => bcrypt('emp123'),
            ],
            [
                'name' => 'Supervisor',
                'email' => 'supervisor@hxm.com',
                'password' => bcrypt('super123'),
            ],
        ]);
    }
}
