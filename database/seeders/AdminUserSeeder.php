<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Center',
            'email' => 'shazim96khan@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
