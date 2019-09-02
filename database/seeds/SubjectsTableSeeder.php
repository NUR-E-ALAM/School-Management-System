<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'subject_name' => 'Bangla First Part',
            'sub_category' => 'Bangla',
        ]);
        DB::table('subjects')->insert([
            'subject_name' => 'Bangla Secend Part',
            'sub_category' => 'Bangla',
        ]);
        DB::table('subjects')->insert([
            'subject_name' => 'English First Part',
            'sub_category' => 'English',
        ]);
        DB::table('subjects')->insert([
            'subject_name' => 'Engilsh Secend Part',
            'sub_category' => 'English',
        ]);
    }
}
