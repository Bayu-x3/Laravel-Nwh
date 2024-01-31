<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = DB::table('siswas')->first();
        $petugas = DB::table('petugases')->first();
        $spp_siswa = DB::table('siswas')->where('id_spp', $siswa->id_spp)->first();

        DB::table('pembayarans')->insert([
            'id_petugas' => $petugas->id_petugas,
            'nisn' => $siswa->nisn,
            'tgl_bayar' => now(),
            'bulan_dibayar' => Str::random(1, 10),
            'tahun_dibayar' => Str::random(1, 10),
            'id_spp' => $spp_siswa->id_spp,
            'jumlah_bayar' => rand(10, 100),
        ]);
    }
}
