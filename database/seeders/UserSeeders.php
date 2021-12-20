<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_login'=> '0',
            'is_active'=> '0',
            'username'=> 'Admin',
            'school'=> 'UC',
            'city'=> 'Surabaya',
            'birthyear'=> '2002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_users')->insert([
            'user_id' => '1',
            'coins' => '2000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'is_login'=> '0',
            'is_active'=> '0',
            'username'=> 'Admin',
            'school'=> 'UC',
            'city'=> 'Surabaya',
            'birthyear'=> '2002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fis10_users')->insert([
            'user_id' => '2',
            'coins' => '2000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
