<?php

namespace App\Http\Controllers;

use App\Cep;
use Illuminate\Http\Request;

class CepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cep = Cep::all();
        return view('cep.index', compact(['cep']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cep.create');
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
        $cep = new Cep();
        $cep::create([
                        "IDCidade" => $dados('IDCidade'),
                        "CEP" => $dados('CEP'),
                        "Logradouro" => $dados('Logradouro'),
                        "Coordenada" => $dados('Coordenada'),
                        "Bairro"     => $dados('Bairro'),
                    ]);

        $cep->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function show(Cep $cep)
    {
        $consulta = Cep::find($cep);
        return view('Cep.show', compact(['consulta']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function edit(Cep $cep)
    {
        $consulta = Cep::find($cep);
        return view('Cep.edit', compact(['consulta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cep $cep)
    {
        $dados = $request->all();
        $cep = new Cep();
        $cep::where('IDCep', $cep)
                    ->update([
                                "IDCidade" => $dados('IDCidade'),
                                "CEP" => $dados('CEP'),
                                "Logradouro" => $dados('Logradouro'),
                                "Coordenada" => $dados('Coordenada'),
                                "Bairro"     => $dados('Bairro'),
                                "updated_at" => now()
                            ]);
        $cep->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cep  $cep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cep $cep)
    {
        $cep = new Cep();
        $cep -> find($cep);
        $cep -> delete();
        $cep -> save();
    }
}
