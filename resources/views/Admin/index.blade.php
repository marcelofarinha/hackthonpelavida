@extends('layouts.app')

@section('content')


<h3>Admin</h3>
@if (count($Admin)>0)
    <ol>
        @foreach ($Admin as $r)
            {{ $r['Nome']}} |
    <a href="{{ route ('$Admin.edit', $r['Admin'])}}">Editar</a><br>

        @endforeach
    </ol>
@else
    <p>Nenhum registro encontrado</p>
@endif

@endsection
