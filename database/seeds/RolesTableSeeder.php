<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name' => 'Admin', 'guard_name' => 'web'],
        	['name' => 'User', 'guard_name' => 'web'],
        ];

        \DB::table('roles')->insert($data);
    }
}
