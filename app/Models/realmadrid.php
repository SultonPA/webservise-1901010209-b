<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class realmadrid extends Model
{
    use HasFactory;
    protected $table = 'realmadrid';
    public $timestamps = false;
    protected $fillable = ['nama_pemain', 'nama_pelatih', 'status_pemain', 'asal_pemain', 'asal_wasit', 'umur_pemain'];
}
