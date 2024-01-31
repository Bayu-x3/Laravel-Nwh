<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('kelases')->insert([
        "id_kelas" => rand(1,100),
        "nama_kelas" => Str::random(1, 100),
        "kompetensi_keahlian" => Str::random(1, 100),
       ]);
    }
}