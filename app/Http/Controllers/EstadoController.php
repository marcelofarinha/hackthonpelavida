<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = Estado::all();


        return view('cidade.index', compact(['cidade']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidade.create');
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
        //dd($dados);
        $estado = new Estado();
        $estado::create([
                            "IDPais" => $dados('IDPais'),
                            "Nome" => $dados('Nome'),
                            "CodigoIBGE" => $dados('CodigoIBGE'),
                            "Sigla" => $dados('Sigla')
                            ]);
        $estado->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        $consulta = Estado::find($estado);
        return view('cidade.show', compact(['consulta']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        $consulta = Estado::find($estado);
        return view('cidade.edit', compact(['consulta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $dados = $request->all();
        $estado = new Estado();
        $estado::where('IDEstado', $estado)
                    ->update([
                        "IDPais" => $dados('IDPais'),
                        "Nome" => $dados('Nome'),
                        "CodigoIBGE" => $dados('CodigoIBGE'),
                        "Sigla" => $dados('Sigla')
                        ]);
        $estado  ->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado = new Estado();
        $estado -> find($estado);
        $estado -> delete();
        $estado -> save();
    }
}
