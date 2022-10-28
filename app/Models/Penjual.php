<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    public function Makanan(){
        return $this->hasMany(Makanan::class);
    }
    public function Minuman(){
        return $this->hasMany(Minuman::class);
    }
    use HasFactory;
}
