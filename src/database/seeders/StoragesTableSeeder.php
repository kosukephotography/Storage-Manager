<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        for($i = 1; $i <= 5; $i++) {
            DB::table('storages')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'maker' => 'メーカー' . $i,
                'model_number' => 'モデルナンバー' . $i,
                'serial_number' => 'シリアルナンバー' . $i,
                'size' => '2TB',
                'types' => 'レンタル',
                'supported_os' => 'Windows',
                'recovery_key' => '回復キー' . $i,
                'storage_password' => 'パスワード' . $i,
                'created_by' => '1',
                'updated_by' => '1'
            ]);
        }

        DB::table('storages')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'maker' => 'BUFFALO',
            'model_number' => 'モデルナンバー',
            'serial_number' => 'シリアルナンバー99',
            'size' => '4TB',
            'types' => 'ライブラリ',
            'supported_os' => 'Mac',
            'recovery_key' => '回復キー',
            'storage_password' => 'パスワード',
            'created_by' => '1',
            'updated_by' => '1'
        ]);
        DB::table('storages')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'maker' => 'BUFFALO',
            'model_number' => 'モデルナンバー',
            'serial_number' => 'シリアルナンバー98',
            'size' => '500GB',
            'types' => 'レンタル',
            'supported_os' => 'Mac',
            'recovery_key' => '回復キー',
            'storage_password' => 'パスワード',
            'created_by' => '1',
            'updated_by' => '1'
        ]);
        DB::table('storages')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'maker' => 'BUFFALO',
            'model_number' => 'モデルナンバー',
            'serial_number' => 'シリアルナンバー97',
            'size' => '500GB',
            'types' => 'レンタル',
            'supported_os' => 'Windows',
            'recovery_key' => '回復キー',
            'storage_password' => 'パスワード',
            'created_by' => '1',
            'updated_by' => '1',
            'deleted_at' => $now
        ]);
        DB::table('storages')->insert([
            'created_at' => $now,
            'updated_at' => $now,
            'maker' => 'BUFFALO',
            'model_number' => 'モデルナンバー',
            'serial_number' => 'シリアルナンバー96',
            'size' => '4TB',
            'types' => 'ライブラリ',
            'supported_os' => 'Mac',
            'recovery_key' => '回復キー',
            'storage_password' => 'パスワード',
            'created_by' => '1',
            'updated_by' => '1'
        ]);
    }
}
