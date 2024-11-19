<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class petugas extends Authenticable
{
    use HasFactory;

    protected $table = 'petugas';

    protected $primarykey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
        'usename',
        'password',
        'telp',
        'level',
        
    ];
}
