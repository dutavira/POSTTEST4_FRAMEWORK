<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    public function Penjual(){
        return $this->belongsTo(Penjual::class);
    }
    use HasFactory;
    protected $table = "minumen";
    protected $fillable = ['id', 'nama', 'rasa', 'harga', 'penjual_id'];
}
