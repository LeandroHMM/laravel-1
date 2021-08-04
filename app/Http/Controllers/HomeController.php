<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nome = "Leandro";
        $idade = 43;
        return view('welcome', ['nome' => $nome, 'idade' => $idade]);
    }
}
