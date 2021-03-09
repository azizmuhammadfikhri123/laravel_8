<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;


    protected $table = 'siswas';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'id_rayon', 'rombel'];

    public function Rayon()
    {
        return $this->hasOne(Rayon::class, 'id' , 'nama_rayon');
    }
}
