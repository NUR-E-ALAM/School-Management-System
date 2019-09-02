<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'section_name' => 'A',
             ]);

        DB::table('sections')->insert([
            'section_name' => 'B',
             ]);
         DB::table('sections')->insert([
             'section_name' => 'C',
             ]);
    }
}
