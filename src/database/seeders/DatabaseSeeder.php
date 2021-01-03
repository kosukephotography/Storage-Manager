<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $now = \Carbon\Carbon::now();

        for($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'email' => 'test' . $i . '@test.com',
                'password' => bcrypt('secret'),
                'family_name' => 'テスト' . $i,
                'first_name' => '太郎',
                'employee_number' => '01908' . $i,
                'is_admin' => '1',
                'created_by' => '1',
                'updated_by' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        for($i = 1; $i <= 10; $i++) {
            DB::table('storages')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'maker' => 'メーカー' . $i,
                'model_number' => 'モデルナンバー' . $i,
                'serial_number' => 'シリアルナンバー' . $i,
                'types' => 'レンタル',
                'supported_os' => 'Windows',
                'recovery_key' => '回復キー' . $i,
                'password' => 'パスワード' . $i,
                'created_by' => '1',
                'updated_by' => '1'
            ]);
        }

        for($i = 1; $i <= 3; $i++) {
            DB::table('opportunity_relations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'opportunity_id' => 'PR123456',
                'created_by' => '1',
                'updated_by' => '1'
            ]);
        }



        for($i = 1; $i <= 3; $i++) {
            DB::table('reservations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'status' => '予約中',
                'created_by' => $i,
                'updated_by' => '1',
                'start_date' => '2021-01-01',
                'end_date' => '2021-01-05'
            ]);
            DB::table('reservations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'status' => '貸出済',
                'created_by' => $i,
                'updated_by' => '1',
                'start_date' => '2021-01-01',
                'end_date' => '2021-01-05'
            ]);
            DB::table('reservations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'status' => '期限切れ未返却',
                'created_by' => $i,
                'updated_by' => '1',
                'start_date' => '2021-01-01',
                'end_date' => '2021-01-05'
            ]);
            DB::table('reservations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'status' => '返却済',
                'created_by' => $i,
                'updated_by' => '1',
                'start_date' => '2021-01-01',
                'end_date' => '2021-01-05'
            ]);
            DB::table('reservations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'status' => 'キャンセル',
                'created_by' => $i,
                'updated_by' => '1',
                'start_date' => '2021-01-01',
                'end_date' => '2021-01-05'
            ]);
        }

    }
}
