<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'user_id', 'tingkat', 'deskripsi', 'gambar', 'warna'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
