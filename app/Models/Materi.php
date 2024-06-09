<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materis'; // Nama tabel dalam database

    protected $fillable = ['title', 'description', 'meeting_number', 'file_path']; // Kolom yang bisa diisi
}
