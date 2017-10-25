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
        DB::table('users')->insert([
            'user'      => 'admin',
            'password'  => bcrypt('A2gy&4L'),
            'type'      => 'admin'
        ]);

        DB::table('users')->insert([
            'user'      => 'development',
            'password'  => bcrypt('dp0BsV$'),
            'type'      => 'development'
        ]);

        DB::table('users')->insert([
            'user'      => 'finance',
            'password'  => bcrypt('Fg8Tv2%m'),
            'type'      => 'finance'
        ]);

        DB::table('users')->insert([
            'user'      => 'sales',
            'password'  => bcrypt('rHJ5l\B1'),
            'type'      => 'sales'
        ]);
    }
}
