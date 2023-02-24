<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function Aspirasi() {
        return $this->hasMany(Aspirasi::class);
    }

    public function Input_Aspirasi() {
        return $this->hasMany(Input_Aspirasi::class);
    }
}
