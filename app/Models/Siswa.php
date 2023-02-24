<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public function nis() {
        return $this->hasMany(Input_Aspirasi::class, 'Id_pelaporan');
    }
}
