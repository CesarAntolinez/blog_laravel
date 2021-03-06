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
        /*DB::table('users')->insert([
            'name'      => 'admin 1',
            'email'     => 'admin1@gmail.com',
            'password'  => bcrypt('password'),
            'type'      => 'admin'
        ]);
        DB::table('users')->insert([
            'name'      => 'admin 2',
            'email'     => 'admin2@gmail.com',
            'password'  => bcrypt('password'),
            'type'      => 'admin'
        ]);*/

        factory(\App\User::class, 10)->create();
    }
}
