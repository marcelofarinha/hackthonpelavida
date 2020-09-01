@extends('layouts.app')

@section('content')


<h3>Tipos de Exame</h3>
@if ({{isset($unidade)}})
    <ol>
        @foreach ($unidade as $r)
            {{ r$['nome']}} |
    <a href="{{ route ('tipoexame')}}"></a>

        @endforeach
    </ol>
@else
    <p>Nenhum registro encontrado</p>
@endif

@endsection
