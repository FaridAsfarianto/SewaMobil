<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    public $table = "mobil";
    protected $fillable = ['merek', 'model', 'no_plat', 'tarif_sewa'];
}
