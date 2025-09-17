<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau nama tabel = 'bukus')
    protected $table = 'buku';

    // Primary key (opsional kalau default 'id')
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
    ];
}
