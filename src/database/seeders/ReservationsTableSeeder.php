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

        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '1',
            'status' => '予約中',
            'created_by' => '1',
            'updated_by' => '1',
            'start_date' => '2021-01-16',
            'end_date' => '2021-01-19'
        ]);

        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '2',
            'status' => '貸出済',
            'created_by' => '1',
            'updated_by' => '1',
            'start_date' => '2021-01-13',
            'end_date' => '2021-01-17'
        ]);
        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '2',
            'status' => '期限切れ未返却',
            'created_by' => '2',
            'updated_by' => '2',
            'start_date' => '2021-01-18',
            'end_date' => '2021-01-22'
        ]);

        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '1',
            'status' => '返却済',
            'created_by' => '1',
            'updated_by' => '1',
            'start_date' => '2021-01-21',
            'end_date' => '2021-01-23'
        ]);
        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '1',
            'status' => 'キャンセル',
            'created_by' => '2',
            'updated_by' => '2',
            'start_date' => '2021-01-12',
            'end_date' => '2021-01-14'
        ]);
        DB::table('reservations')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'storage_id' => '3',
            'status' => '予約中',
            'created_by' => '2',
            'updated_by' => '2',
            'start_date' => '2021-01-11',
            'end_date' => '2021-01-24'
        ]);

    }
}
