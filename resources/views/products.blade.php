@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1> Tela de Produtos </h1>

    @if($busca != '')
    <p>O usuário está buscando por: {{ $busca }} </p>
    @endif


<a href="/">Voltar á página home !</a>

@endsection
