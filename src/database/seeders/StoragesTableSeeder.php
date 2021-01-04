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
    }
}
