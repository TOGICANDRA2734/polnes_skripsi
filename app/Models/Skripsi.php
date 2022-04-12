<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $fillable = ['kode_prod', 'nama_mahasiswa', 'judul', 'abstraksi', 'dosen_pembimbing1', 'dosen_pembimbing2', 'thr_selesai', 'jumlah_halaman', 'tgl_upload', 'nama_file'];
}
