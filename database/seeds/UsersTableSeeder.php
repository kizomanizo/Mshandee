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
        //This method adds the testing admin user. Or first user! Kz
        DB::table('users')->insert([
            'name' => 'Mkuu Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'type' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Mtwana Yuza',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'type' => 'user'
        ]);
    }
}
