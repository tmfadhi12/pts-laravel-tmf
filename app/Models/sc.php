<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sc extends Model
{
    protected $table = "karyawans";
    protected $fillable = ['namaKaryawan','izinMasuk','telatMasuk','bolosMasuk','hadirMasuk'];
}
