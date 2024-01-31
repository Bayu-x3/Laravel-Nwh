<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id("id_pembayaran");
            $table->foreignId("id_petugas")->references("id_petugas")->on("petugases");
            $table->char("nisn", 10);
            $table->foreign("nisn")->references("nisn")->on("siswas");
            $table->date("tgl_bayar", 255);
            $table->string("bulan_dibayar", 255);
            $table->string("tahun_dibayar", 255);
            $table->foreignId("id_spp")->references("id_spp")->on("siswas");
            $table->integer("jumlah_bayar");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('pembayarans', function (Blueprint $table) {
            $table->dropForeign(['nisn']);
            $table->dropForeign(['id_spp']);
        });

        Schema::dropIfExists('pembayarans');
    }
};
