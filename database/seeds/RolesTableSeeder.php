<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'slug' => 'super-admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'General Admin',
            'slug' => 'general-admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'Teacher',
            'slug' => 'Teacher',
        ]);
        DB::table('roles')->insert([
            'name' => 'Parent',
            'slug' => 'parent',
        ]);
        DB::table('roles')->insert([
            'name' => 'Student',
            'slug' => 'student',
        ]);
        DB::table('roles')->insert([
            'name' => 'Accountant',
            'slug' => 'accountant',
        ]);
        DB::table('roles')->insert([
            'name' => 'Librarian',
            'slug' => 'librarian',
        ]);
    }
}
