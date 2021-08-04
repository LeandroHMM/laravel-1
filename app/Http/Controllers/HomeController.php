<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nome = "Leandro";
        $idade = 43;

        $arr = [10,20,30,40,50];

        $nomes = ["Matheus", "Maria", "Luciano", "Saulo"];


        return view('welcome',
         [
             'nome' => $nome,
             'idade' => $idade,
             'profissão' => "Programador",
             'arr' => $arr,
             'nomes' => $nomes
            ]);
    }
}
