<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;

    protected $fillable = ['kode_prod','kode_fak','nama_prod'];
}
