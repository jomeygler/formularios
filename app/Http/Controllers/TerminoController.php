<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termino;

class TerminoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Termino = Termino::latest()->paginate(15);
        return view('termino.index',compact('Termino'))
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
       
       return view('termino.create');
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
            'email' => 'required',
            'rutrepresentante' => 'required',
            'representante' => 'required',
            'rol' => 'required',
            //'email' => 'required|email',    
        ]);
        $Termino = new Termino();
        $Termino -> nombre = $request->get('nombre');
        $Termino -> rut = $request->get('rut');
        $Termino -> nombre = $request->get('nombre');
        $Termino -> direccion = $request->get('direccion');
        $Termino -> telefono = $request->get('telefono');
        $Termino -> celular = $request->get('celular');
        $Termino -> email = $request->get('email');
        $Termino -> rol = $request->get('rol');
        $Termino -> razones = $request->get('razones');
        $Termino -> representante = $request->get('representante');
        $Termino -> rutrepresentante = $request->get('rutrepresentante');
        $Termino -> rep_direcion = $request->get('rep_direcion');
        $Termino -> rep_telefono = $request->get('rep_telefono');
        $Termino -> rep_email = $request->get('rep_email');
        $Termino -> rep_celular = $request->get('rep_celular');
        $Termino ->save();
        return view('termino.show', compact('Termino'));
        //
    }

    public function registrada($id, Termino $Termino){

        $Termino = Termino::all();
        return view('termino.show', compact('Termino'));
    }

    public function pdf($id, Termino $Termino){

        $Termino = Termino::find($id);
        $pdf = \PDF::loadView('termino.pdf', compact('Termino'));
        return $pdf->stream('termino.pdf');
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
