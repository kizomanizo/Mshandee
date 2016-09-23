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
            'name' => 'admin@gmail.com',
            'email' => 'kizomanizo@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
