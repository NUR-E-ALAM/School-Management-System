<?php

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sessions')->insert([
            'sessionname' => '2018',
            'startdate' => '2018-01-01',
            'enddate' => '2018-12-31',
            'active' => '0',
             ]);
        DB::table('sessions')->insert([
                'sessionname' => '2019',
                'startdate' => '2019-01-01',
                'enddate' => '2019-12-31',
                'active' => '1',
                 ]);
    }
}
