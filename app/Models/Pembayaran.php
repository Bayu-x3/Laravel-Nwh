<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Petugas;
use App\Models\Spp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'id_petugas',
        'nisn',
        'tgl_bayar',
        'bulan_dibayar',
        'tahun_dibayar',
        'id_spp',
        'jumlah_bayar',
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp');
    }
}
