<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
            'shift_name' => 'Morning',
           ]);

           DB::table('shifts')->insert([
            'shift_name' => 'Day',
           ]);
           DB::table('shifts')->insert([
            'shift_name' => 'Night',
           ]);
    }
}
