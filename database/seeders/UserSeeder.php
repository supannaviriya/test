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
        DB::table('users')->insert([

            [
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin123'
            ],
            
            [
                'role_id' => 2,
                'name' => 'Member',
                'email' => 'member1@gmail.com',
                'password' => 'member123'
            ],
            
            [
                'role_id' => 3,
                'name' => 'member2',
                'email' => 'member2@gmail.com',
                'password' => 'member456'
            ]


            ]);

            DB::table('users')->insert
    }
}
