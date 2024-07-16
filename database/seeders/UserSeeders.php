<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "id" => random_int(1, 1000),
            "username" => "Ayanokouji15",
            "password" => Hash::make('12345678'),
            "nama_petugas" => "Ayanokouji",
            "level" => "petugas",
        ]);
    }
}
