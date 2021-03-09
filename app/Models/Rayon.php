<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $tabel = 'rayons';
    protected $fillable = ['nama_rayon', 'pembimbing'];
}
