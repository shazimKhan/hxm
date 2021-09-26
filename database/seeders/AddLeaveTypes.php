<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddLeaveTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('leave_types')->insert([
        [
            'leave_type'=>'Short leave',
            'description'=>'test'
        ],
        [
            'leave_type'=>'Urgent Piece Work',
            'description'=>'test'
        ],
        [
            'leave_type'=>'Weeding Leave', 
            'description'=>'test'
        ],
        [
            'leave_type'=>'Sick Leave',
            'description'=>'test'
        ]
        ]);
    }
}
