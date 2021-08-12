<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Leandro";
        $idade = 43;
    
        $arr = [10,20,30,40,50];
    
        $nomes = ["Matheus", "Maria", "Luciano", "Saulo"];
    
    
        return view('welcome',
            [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
            ]);
    }

    public function create() {
        return view('events.create');
    }
}
