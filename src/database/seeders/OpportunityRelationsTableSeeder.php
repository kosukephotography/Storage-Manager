<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpportunityRelationsTableSeeder extends Seeder
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
            DB::table('opportunity_relations')->insert([
                'created_at' => $now,
                'updated_at' => $now,
                'storage_id' => '1',
                'opportunity_id' => 'PR12345' . $i,
                'created_by' => '1',
                'updated_by' => '1'
            ]);
        }
    }
}
