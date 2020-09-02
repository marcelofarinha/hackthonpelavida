<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidade = Cidade::all();


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
        $cidade = new Cidade();
        $cidade::create([
                            "IDEstado" => $dados('IDEstado'),
                            "Nome" => $dados('Nome'),
                            "CodigoIBGE" => $dados('CodigoIBGE'),
                            "DDD" => $dados('DDD'),
                            "CEPGeral" => $dados('CEPGeral')
                            ]);
        $cidade->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        $consulta = Cidade::find($cidade);
        return view('cidade.show', compact(['consulta']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        $consulta = Cidade::find($cidade);
        return view('cidade.edit', compact(['consulta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        $dados = $request->all();
        $cidade = new Cidade();
        $cidade::where('IDCidade', $cidade)
                    ->update([
                        "IDEstado" => $dados('IDEstado'),
                        "Nome" => $dados('Nome'),
                        "CodigoIBGE" => $dados('CodigoIBGE'),
                        "DDD" => $dados('DDD'),
                        "CEPGeral" => $dados('CEPGeral')
                        ]);
        $cidade  ->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        $cidade = new Cidade();
        $cidade -> find($cidade);
        $cidade -> delete();
        $cidade -> save();
    }
}
