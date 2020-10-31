<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingreso;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ingreso = Ingreso::latest()->paginate(15);
        return view('ingreso.index',compact('Ingreso'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
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
            'origen_fondos' => 'required',
            'direccion' => 'required',
            'monto' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            //'email' => 'required|email',    
        ]);
        $Ingreso = new Ingreso();
        $Ingreso -> nombre = $request->get('nombre');
        $Ingreso -> paterno = $request->get('paterno');
        $Ingreso -> materno = $request->get('materno');
        $Ingreso -> direccion = $request->get('direccion');
        $Ingreso -> rut = $request->get('rut');
        $Ingreso -> origen_fondos = $request->get('origen_fondos');
        $Ingreso -> monto = $request->get('monto');
        $Ingreso->save();
        return view('ingreso.show', compact('Ingreso'));
    }
    
    public function registrada($id, Ingreso $Ingreso){

        $Ingreso = Ingreso::all();
        return view('ingreso.show', compact('Ingreso'));
    }

    public function pdf($id, Ingreso $Ingreso){

        $Ingreso = Ingreso::find($id);
        $pdf = \PDF::loadView('ingreso.pdf', compact('Ingreso'));
        return $pdf->stream('ingreso.pdf');
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
