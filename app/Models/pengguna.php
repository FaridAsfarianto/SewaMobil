<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    public $table = "pengguna";
    protected $fillable = ['nama', 'alamat', 'no_telp', 'no_sim'];
}
