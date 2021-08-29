<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employees')->insert([
            [
            'code' => 'EMP0001',
            'status' => '1',
            'name' => 'Employee',
            'gender' => '1',
            'number' => '9999999999',
            'pan_number' => '123123',
            'user_id' => '2'
            ],
            [
                'code' => 'SUP0001',
                'status' => '1',
                'name' => 'Supervisor',
                'gender' => '1',
                'number' => '9999999999',
                'pan_number' => '123123',
                'user_id' => '3'
            ],
        ]);
    }
}
