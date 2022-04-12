<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'alamat_ip', 'jam_akses', 'tgl_akses', 'url', 'keterangan'];
}
