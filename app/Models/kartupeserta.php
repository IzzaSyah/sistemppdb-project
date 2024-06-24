<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartupeserta extends Model
{
    use HasFactory;
    protected $table = 'kartupeserta'; 
    protected $fillable = [
        'id_user',
        'kartupeserta',
    ];
    public function user()
    {
        return $this->belongsTo(User::class); // asumsikan model User ada di App\Models\User
    }
}
