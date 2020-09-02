@extends('layouts.app')

@section('content')


<h3>Novo tipo de exame</h3>

<form action="{{ route('tipoexame.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" id="">
    <input type="text" name="descricao" id="">
    <input type="submit" value="Salvar">
</form>

@endsection
