<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sc_antecedentes;
use App\Models\sc_aprendiz_ficha;
use App\Models\sc_comite;
use App\Models\sc_condicionamiento_matricula;
use App\Models\sc_ficha;
use App\Models\sc_novedad;
use App\Models\sc_estimulos;
use App\Models\sc_documento;
use App\Models\sc_motivo_antecedente;

class AntecedentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Antecedentes.antecedentes');
        //return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $antecedente = sc_antecedentes::find($id);
      return view('Antecedentes.antecedentes')
      ->with('antecedente', $antecedente);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
