<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ['admin', 'petugas'];

        DB::table('petugases')->insert([
            'id_petugas' => rand(1, 1000),
            'username' => Str::random(10),
            'password' => Str::random(10),
            'nama_petugas' => Str::random(10),
            'level' => $levels[array_rand($levels)],
        ]);
    }
}
