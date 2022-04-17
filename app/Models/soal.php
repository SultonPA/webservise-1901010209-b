<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;
    protected $table = 'soals';
    public $timestamps = false;
    protected $fillable = ['nama_mk', 'dosen', 'jumlah_soal', 'keterangan'];
}
