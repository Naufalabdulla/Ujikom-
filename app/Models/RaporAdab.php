<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaporAdab extends Model
{
    use HasFactory;

    protected $table = 'rapor_adabs';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tahunajaran', 'presentasikehadiran', 'rataratakualitas', 'catatan'];
}
