<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman_mobil extends Model
{
    use HasFactory;
    public $table = "peminjaman_mobil";
    protected $fillable = ['tgl_mulai', 'tgl_selesai', 'pengguna_pinjam', 'mobil_pinjam'];
}
