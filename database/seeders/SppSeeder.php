<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spps')->insert([
            "id_spp" =>rand(1,100),
            "tahun" =>rand(1, 100),
            "nominal" =>rand(1, 100),
        ]);
    }
}
