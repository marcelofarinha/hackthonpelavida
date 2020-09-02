<?php

namespace App\Http\Controllers;

use App\Convenio;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenio = Convenio::all();


        return view('convenio.index', compact(['convenio']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenio.create');
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
        $convenio = new Convenio();
        $convenio::create([
                            "IDConvenio" => $dados('IDConvenio'),
                            "Nome" => $dados('Nome')
                            ]);
        $convenio->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show(Convenio $convenio)
    {
        $consulta = Convenio::find($convenio);
        return view('convenio.show', compact(['consulta']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Convenio $convenio)
    {
        $consulta = Convenio::find($convenio);
        return view('convenio.edit', compact(['consulta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convenio $convenio)
    {
        $dados = $request->all();
        $convenio = new Convenio();
        $convenio::where('IDConvenio', $convenio)
                    ->update([
                        "IDConvenio" => $dados('IDConvenio'),
                        "Nome" => $dados('Nome')
                        ]);
        $convenio  ->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convenio $convenio)
    {
        $convenio = new Convenio();
        $convenio -> find($convenio);
        $convenio -> delete();
        $convenio -> save();
    }
}
