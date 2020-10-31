<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parte;

class ParteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Parte = Parte::latest()->paginate(15);
        return view('partes.index',compact('Parte'))
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
      return view('partes.create');

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
            'fecha' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'materia' => 'required',
            //'email' => 'required|email',    
        ]);
       
       $Parte = new parte();
       $Parte-> fecha = $request->get('fecha');
       $Parte-> rut = $request->get('rut');
       $Parte-> nombre = $request->get('nombre');
       $Parte-> paterno = $request->get('paterno');
       $Parte-> materno = $request->get('materno');
       $Parte-> direccion = $request->get('direccion');
       $Parte-> comuna = $request->get('comuna');
       $Parte-> telefono = $request->get('telefono');
       $Parte-> email = $request->get('email');
       $Parte-> materia = $request->get('materia');
       $Parte-> save(); 
       return view ('partes.show', compact('Parte'));
      
        //
    }

    public function registrada($id, Parte $Parte){
        $Parte = Parte::find($id);
        return view('partes.show', compact('Parte'));
    }

    public function pdf($id, Parte $Parte){

        $Parte = Parte::find($id);
        $pdf = \PDF::loadView('partes.pdf', compact('Parte'));
        return $pdf->stream('partes.pdf');
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
