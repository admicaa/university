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
        DB::table('users')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'admin',
                'image' => '',
                'first_name' => 'Admin',
                'last_name' => ' ',
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234admin'),
                'status' => '1',
                'phone' => ' ',
                'gender' => 'male',

                'job_type' => 'مدير الموارد البشرية',
            ],

        ]);
    }
}
