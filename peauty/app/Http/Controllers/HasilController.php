<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\JenisKulit;
use App\Models\KondisiKulit;
use App\Models\Product;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index($id){
        $hasil = History::find($id);
        $jenis_kulit = JenisKulit::where('nama', $hasil->jenis_kulit)->first();
        $kondisi_kulit = KondisiKulit::where('nama', $hasil->kondisi_kulit)->first();
        return view('hasil', compact('hasil', 'jenis_kulit', 'kondisi_kulit', 'id'));
    }

    public function rekomendasi($id){
        $hasil = History::find($id);
        $product_jenis = Product::where('jenis_kulit', $hasil->jenis_kulit)->get();
        $product_kondisi = Product::where('kondisi_kulit', $hasil->kondisi_kulit)->get();
        $jenis_kulit = JenisKulit::where('nama', $hasil->jenis_kulit)->first();
        $kondisi_kulit = KondisiKulit::where('nama', $hasil->kondisi_kulit)->first();
        return view('product', compact('product_jenis', 'product_kondisi', 'jenis_kulit', 'kondisi_kulit'));
    }
}
