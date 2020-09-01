<?php

namespace App\Http\Controllers;

use App\TipoExame;
use Illuminate\Http\Request;

class TipoExameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoExame = TipoExame::all();


        return view('tipoExame.index', compact(['tipoExame']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoExame.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        dd($dados);
        TipoExame::create(["nome" => $dados('Nome'), "descricao" => $dados('Descricao')]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoExame  $tipoExame
     * @return \Illuminate\Http\Response
     */
    public function show(TipoExame $tipoExame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoExame  $tipoExame
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoExame $tipoExame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoExame  $tipoExame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoExame $tipoExame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoExame  $tipoExame
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoExame $tipoExame)
    {
        //
    }
}
