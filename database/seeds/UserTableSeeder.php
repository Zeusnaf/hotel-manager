<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Admin',
            'password' => bcrypt('password'),
            'email' => 'admin@hotel.com'
        ];

        \App\User::create($user);
    }
}
