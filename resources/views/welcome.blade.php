            @extends('layouts.main')

            @section('title', 'HDC Events')

            @section('content')
        
            <h1>Quarta Feira 11/08/2021 !!!!!!!!</h1>
            <img src="/img/note.jpg" alt="notebook">
            @if (10 > 5)
                <p>A condição é true</p>
            @endif

            <p>{{ $nome }}</p>

            @if($nome == "Pedro")
            <p>O nome é Pedro</p>
            @elseif ($nome == "Leandro")
            <p>O nome é {{$nome}} e ele têm {{ $idade2 }} anos, e trabalha como {{ $profissao }} !</p>
            @else
            <p>O nome não é Pedro</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <p>{{ $arr[$i] }} - {{ $i }}</p>
                @if( $i == 2 )
                    <p>O i é 2</p>
                @endif

            @endfor

            @php
                $name = "João";
                echo $name;

            @endphp

            @foreach($nomes as $nome)
                <p>{{ $loop->index }}</p>
                <p>{{ $nome }}</p>

            @endforeach

            <!-- Comentário do HTML -->
            {{-- Este é o comentário do Blade --}}

            @endsection