<?php

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'classexamname' => 'Final Term',
            'examstart' => '2019-04-01',
            'examend' => '2019-04-30',
             ]);
         DB::table('exams')->insert([
             'classexamname' => 'Mid Term',
             'examstart' => '2019-08-01',
             'examend' => '2019-08-30',
              ]);         
    }
}
