<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', // Tambahkan kolom id_user di sini
        'name',
        'email',
        'gender',
        'birthdate',
        'address',
        'asalsekolah',
        'nisn',
        'nilai',
        'kk',
        'package',
        'nama_ayah',
        'pekerjaan_ayah',
        'nik_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'nik_ibu',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
