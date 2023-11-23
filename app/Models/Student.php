<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis', 'nama', 'jenis_kelamin', 'email', 'no_ponsel', 'alamat', 'tanggal_lahir', 'kelas', 'jurusan', 'minat', 'kode_kelas'
    ];
}
