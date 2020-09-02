@extends('layouts.app')

@section('content')


<h3>Adicionar Estado</h3>

<form action="{{ route('estado.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" id="">
    <input type="text" name="descricao" id="">
    <input type="submit" value="Salvar">
</form>

@endsection
