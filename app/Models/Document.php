<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'kartukeluarga',
        'ijazah',
        'sertifikat',
    ];
    public function user()
    {
        return $this->belongsTo(User::class); // asumsikan model User ada di App\Models\User
    }
}
