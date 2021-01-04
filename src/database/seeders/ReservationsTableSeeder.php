<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

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
