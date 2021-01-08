<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        DB::table('users')->insert([
            'email' => 'kosuke.photography@gmail.com',
            'password' => bcrypt('secret'),
            'family_name' => 'Kosuke',
            'first_name' => 'Kondo',
            'employee_number' => '020000',
            'is_admin' => '1',
            'created_by' => '1',
            'updated_by' => '1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        for($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'email' => 'test' . $i . '@test.com',
                'password' => bcrypt('secret'),
                'family_name' => 'テスト' . $i,
                'first_name' => '太郎',
                'employee_number' => '01908' . $i,
                'is_admin' => '0',
                'created_by' => $i,
                'updated_by' => $i,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        DB::table('users')->insert([
            'email' => 'kosuke.photography2@gmail.com',
            'password' => bcrypt('secret'),
            'family_name' => 'Kosuke',
            'first_name' => 'Kondo',
            'employee_number' => '020001',
            'is_admin' => '1',
            'created_by' => '1',
            'updated_by' => '1',
            'created_at' => $now,
            'updated_at' => $now,
            'deleted_at' => $now,
        ]);

    }
}
