<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spps';
    protected $primaryKey = 'id_spp';
    protected $fillable = [
        'tahun',
        'nominal',
    ];
}
