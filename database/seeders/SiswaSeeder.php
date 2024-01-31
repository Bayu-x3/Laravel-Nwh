<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $getIdKelas = DB::table('kelases')->insertGetId([
            'id_kelas' => rand(1, 1000),
            'nama_kelas' => Str::random(10),
            'kompetensi_keahlian' => Str::random(10),
        ]);

        $getIdSpp = DB::table('spps')->insertGetId([
            'id_spp' => rand(1, 1000),
            'tahun' => rand(1, 10),
            'nominal' => rand(1, 10),
        ]);

        DB::table('siswas')->insert([
            'nisn' => rand(1, 1000),
            'nis' => rand(1, 10),
            'nama' => Str::random(10),
            'id_kelas' => $getIdKelas,
            'alamat' => rand(1, 10),
            'no_telp' => rand(1, 10),
            'id_spp' => $getIdSpp,
        ]);
    }
}    