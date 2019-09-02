<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'role_id' => '1',
            'slug' => 'super-admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123admin456'),
        ]);
        DB::table('users')->insert([
            'name' => 'General Admin',
            'role_id' => '2',
            'slug' => 'general-admin',
            'email' => 'generaladmin@gmail.com',
            'password' => bcrypt('123gadmin456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Teacher',
            'role_id' => '3',
            'slug' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('teacher123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Parent',
            'role_id' => '4',
            'slug' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('parent123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Student',
            'role_id' => '5',
            'slug' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('student123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Accountant',
            'role_id' => '6',
            'slug' => 'accountant',
            'email' => 'accountant@gmail.com',
            'password' => bcrypt('accountant123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Librarian',
            'role_id' => '7',
            'slug' => 'librarian',
            'email' => 'librarian@gmail.com',
            'password' => bcrypt('librarian123'),
        ]);
    }
}
