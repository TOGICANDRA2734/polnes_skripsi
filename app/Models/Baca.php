<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baca extends Model
{
    use HasFactory;

    protected $fillable = ['no_urut', 'username', 'nim','tgl_baca'];
}
