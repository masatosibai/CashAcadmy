<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'family_name' => 'admin',
            'first_name' => 'test',
            'email' => "admin@test.com",
            'password' => Hash::make(123123),
            "role" => 1,
            "is_deleted" => 0,
        ];
        DB::table('users')->insert($param);
    }
}
