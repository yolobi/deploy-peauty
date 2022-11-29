<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $history = History::where('user_id', $id)->get();
        return view('home', compact('history'));
    }
}
