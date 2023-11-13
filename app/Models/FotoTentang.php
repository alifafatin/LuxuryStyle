<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoTentang extends Model
{
    use HasFactory;

    protected $table = 'foto_tentangs';
    protected $primarykey = 'id';
    protected $fillable = ['fototentang'];
}
