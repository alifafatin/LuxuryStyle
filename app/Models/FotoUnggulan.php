<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoUnggulan extends Model
{
    use HasFactory;
    protected $table = 'foto_unggulans';
    protected $primarykey = 'id';
    protected $fillable = ['fotounggulan', 'namabaju', 'hargabajusebelum', 'hargabajusesudah', 'deskripsi'];

}
