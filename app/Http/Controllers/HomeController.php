<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabeliao;

class HomeController extends Controller
{
    public function index()
    {
       
        $tabelioes = Tabeliao::all();
        return view('home', compact('tabelioes'));
    }
}
