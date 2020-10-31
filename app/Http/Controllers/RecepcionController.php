<?php

namespace App\Http\Controllers;
use App\Models\Recepcion;

use Illuminate\Http\Request;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Recepcion = Recepcion::latest()->paginate(15);
        return view('recepcion.index',compact('Recepcion'))
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
        return view ('recepcion.create');
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
            'propietario' => 'required',
            'permiso' => 'required',
            'arquitecto' => 'required',
            'revisor' => 'required',
            'expediente' => 'required',
            'proyecto' => 'required',
            //'email' => 'required|email',    
        ]);
        $Recepcion = new Recepcion(); 
        
        $Recepcion-> permiso = $request->get('permiso');
        $Recepcion-> proyecto = $request->get('proyecto');
        $Recepcion-> rol = $request->get('rol');
        $Recepcion-> ubicacion = $request->get('ubicacion');
        $Recepcion-> arquitecto = $request->get('arquitecto');
        $Recepcion-> revisor = $request->get('revisor');
        $Recepcion-> expediente = $request->get('expediente');
        $Recepcion-> fecha = $request->get('fecha');
        $Recepcion-> descrip = $request->get('descrip');
        $Recepcion-> declaracion = $request->get('declaracion');
        $Recepcion-> propietario = $request->get('propietario');
        $Recepcion-> save();
        return view('recepcion.show', compact('Recepcion'));

        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registrada($id, Recepcion $Recepcion)
    {
        $Recepcion = Recepcion::find($id);
       return view('recepcion.show', compact('Recepcion'));
        //
    }

    public function pdf($id, Recepcion $Recepcion){

        $Recepcion = Recepcion::find($id);
        $pdf = \PDF::loadView('recepcion.pdf', compact('Recepcion'));
        return $pdf->stream('recepcion.pdf');
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
