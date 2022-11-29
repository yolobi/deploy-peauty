<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function index() {
        return view('rekomendasi');
    }
    
    public function post_input(Request $request){
        $hasil = History::create([
            'user_id' => auth()->user()->id,
            'warna_kulit' => $request->warna_kulit,
            'jenis_kulit' => $request->jenis_kulit,
            'kondisi_kulit' => $request->kondisi_kulit,
        ]);
        return redirect()->route('user.hasil', $hasil->id);
    }
}
