@extends('layouts.app')

@section('content')


<h3>Tipos de Exame</h3>
@if (count($tipoExame)>0)
    <ol>
        @foreach ($tipoExame as $r)
            {{ $r['Nome']}} |
    <a href="{{ route ('tipoexame.edit', $r['IDTipoExame'])}}">Editar</a><br>

        @endforeach
    </ol>
@else
    <p>Nenhum registro encontrado</p>
@endif

@endsection
