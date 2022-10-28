<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Penjual;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index(){
        return view('menu.index',[
            'makanans' => Makanan::all(),
            'minumen' => Minuman::all(),
            'title' => 'Makanan'
        ]);
    }

    public function create(){
        return view('menu.create_mk',[
            'penjuals' => Penjual::all(),
            'title' => 'Makanan'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama'=> 'required|string|max:100',
            'rasa' => 'required|string|max:100',
            'harga' => 'required|int',
            'penjual_id' => 'required'
        ]);

        Makanan::create($validateData);

        return redirect('/makanan')->with('success', 'Makanan Berhasil Ditambah');
    }

    public function show(Makanan $id){
        return view('menu.read_mk', [
            'title' => 'Makanan',
            'makanans'=> $id,
        ]);
    }
}
