<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'tabel_mahasiswa';
    protected $fillable = ['nim', 'nama', 'kelas'];
    public $timestamps = false;
}
