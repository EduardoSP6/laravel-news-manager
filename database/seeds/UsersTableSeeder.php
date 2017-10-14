<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::create([
            'name' => 'Admin',
            'email' => 'admin@user.com',
            'password' => bcrypt('secret'),
        ]));
    }
}


