<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sc_ficha;


class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas=sc_ficha::all();
        return view('fichas.index')
           ->with('fichas', $fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fichas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha= new sc_ficha();
        $ficha->FIC_PK_NumeroFicha= $request->numeroficha;//request=corresponde al nombre del input del formulario.
        $ficha->FIC_FechaInicio= $request->fechainicio;//request=corresponde al nombre del input del formulario.
        $ficha->FIC_FechaFin= $request->fechafin;//request=corresponde al nombre del input del formulario.
        $ficha->FIC_NombreProgramaFormacion= $request->programaformacion;//request=corresponde al nombre del input del formulario.
        $ficha->save();
        return redirect()->route('fichas.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
