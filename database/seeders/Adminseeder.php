<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Room;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data dummy user
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'level' => 'admin',
                'password' => bcrypt('adminlogin')
            ],
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'level' => 'customer',
                'password' => bcrypt('customerlogin')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
