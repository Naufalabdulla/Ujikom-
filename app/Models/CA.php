<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CA extends Model
{
    use HasFactory;
    protected $table = 'pencatatanadabdanibadah';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tanggalpencatatan', 'sholatlimawaktu', 'kualitas', 'catatan'];
}