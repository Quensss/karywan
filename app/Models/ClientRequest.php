<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'posisi',
        'jumlah_pegawai',
        'lokasi',
        'durasi_kontrak',
        'kualifikasi',
    ];
}
