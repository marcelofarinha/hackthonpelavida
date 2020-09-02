@extends('layouts.app')

@section('content')


<h3>Adicionar Cidade</h3>

<form action="{{ route('cidade.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" id="">
    <input type="text" name="descricao" id="">
    <input type="submit" value="Salvar">
</form>

@endsection
