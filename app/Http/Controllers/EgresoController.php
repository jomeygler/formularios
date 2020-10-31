<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egreso;

class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $Egreso = Egreso::latest()->paginate(15);
        return view('egreso.index',compact('Egreso'))
            ->with('i', (request()->input('page', 1) - 1) * 5);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('egreso.create');
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
        
        $request->validate([
            'rut' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'ocupacion' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            //'email' => 'required|email',    
        ]);
        $Egreso = new Egreso();
        $Egreso -> nombre = $request->get('nombre');
        $Egreso -> paterno = $request->get('paterno');
        $Egreso -> materno = $request->get('materno');
        $Egreso -> direccion = $request->get('direccion');
        $Egreso -> rut = $request->get('rut');
        $Egreso -> telefono = $request->get('telefono');
        $Egreso -> ocupacion = $request->get('ocupacion');
        $Egreso -> agua = $request->get('agua');
        $Egreso -> alimentacion = $request->get('alimentacion');
        $Egreso -> arriendo = $request->get('arriendo');
        $Egreso -> luz = $request->get('luz');
        $Egreso -> gastotelefono = $request->get('gastotelefono');
        $Egreso -> movilizacion = $request->get('movilizacion');
        $Egreso -> creditos = $request->get('creditos');
        $Egreso -> educacion = $request->get('educacion');
        $Egreso -> otros = $request->get('otros');
        $Egreso->save();
        return view('egreso.show', compact('Egreso'));
    }//
    
    public function registrada($id, Egreso $Egreso){

        $Egreso = Egreso::all();
        return view('egreso.show', compact('Egreso'));
    }

    public function pdf($id, Egreso $Egreso){

        $Egreso = Egreso::find($id);
        $pdf = \PDF::loadView('egreso.pdf', compact('Egreso'));
        return $pdf->stream('egreso.pdf');
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
