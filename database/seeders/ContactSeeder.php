<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
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
            'phone_number' => '000-1234-1234',
            "is_deleted" => 0,
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'family_name' => '宇宙',
            'first_name' => '地球',
            'email' => "earth@uni.com",
            'phone_number' => '001-1234-1234',
            "is_deleted" => 0,
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'family_name' => '宇宙',
            'first_name' => '火星',
            'email' => "marz@uni.com",
            'phone_number' => '001-1234-1234',
            "is_deleted" => 0,
        ];
        DB::table('contacts')->insert($param);
    }
}
