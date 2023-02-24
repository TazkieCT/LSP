<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_Aspirasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['Kategori', 'Siswa'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'Id_kategori');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }
}
