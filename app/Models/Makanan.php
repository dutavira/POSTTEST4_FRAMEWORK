<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    public function Penjual(){
        return $this->belongsTo(Penjual::class);
    }
    
    use HasFactory;
    protected $table = "makanans";
    protected $fillable = ['id', 'nama', 'rasa', 'harga', 'penjual_id'];
}
