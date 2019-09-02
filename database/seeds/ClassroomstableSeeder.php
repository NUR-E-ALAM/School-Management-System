<?php

use Illuminate\Database\Seeder;

class ClassroomstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'class_name' => 'class One',
            'session_id' => '2',
            'section_id' => '1',
            'shift_id' => '1',
             ]);
        DB::table('classrooms')->insert([
                'class_name' => 'class One',
                'session_id' => '2',
                'section_id' => '2',
                'shift_id' => '2',
                 ]);
        DB::table('classrooms')->insert([
               'class_name' => 'class One',
               'session_id' => '2',
                'section_id' => '3',
                'shift_id' => '3',
                     ]);
    }
}
