<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //For creating Mwananchi Company Limited
        DB::table('companies')->insert([
            'company_name' => 'Mwananchi Company Limited',
            'company_initials' => 'MCL',
            'company_address' => 'P/O/ Box 4777',
            'company_location' => 'Arusha - Tanzania',
            'created_by' => 'Bwana Kizito'
        ]);
    }
}
