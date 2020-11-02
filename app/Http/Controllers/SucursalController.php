<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Sucursale;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sucursale = Sucursale::latest()->paginate(15);
        return view('sucursales.index',compact('Sucursale'))
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
       return view ('sucursales.create'); 
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
            'giro' => 'required',
            'direccion' => 'required',
            'rol' => 'required',
            'Rep_telefono' => 'required',
            //'email' => 'required|email',    
        ]);
        $Sucursale = new Sucursale();
        $Sucursale-> nombre = $request->get('nombre');
        $Sucursale-> rut = $request->get('rut');
        $Sucursale-> email = $request->get('email');
        $Sucursale-> nombre = $request->get('nombre');
        $Sucursale-> rol = $request->get('rol');
        $Sucursale-> direccion = $request->get('direccion');
        $Sucursale-> giro = $request->get('giro');
        $Sucursale-> representante = $request->get('representante');
        $Sucursale-> rutrepresentante = $request->get('rutrepresentante');
        $Sucursale-> rep_telefono = $request->get('Rep_telefono');
        $Sucursale-> comuna1 = $request->get('comuna1');
        $Sucursale-> comuna2 = $request->get('comuna2');
        $Sucursale-> comuna3 = $request->get('comuna3');
        $Sucursale-> comuna4 = $request->get('comuna4');
        $Sucursale-> comuna5 = $request->get('comuna5');
        $Sucursale-> rol1 = $request->get('rol1');
        $Sucursale-> rol2 = $request->get('rol2');
        $Sucursale-> rol3 = $request->get('rol3');
        $Sucursale-> rol4 = $request->get('rol4');
        $Sucursale-> rol5 = $request->get('rol5');
        $Sucursale-> trabajadores1 = $request->get('trabajadores1');
        $Sucursale-> trabajadores2 = $request->get('trabajadores2');
        $Sucursale-> trabajadores3 = $request->get('trabajadores3');
        $Sucursale-> trabajadores4 = $request->get('trabajadores4');
        $Sucursale-> trabajadores5 = $request->get('trabajadores5');
        $Sucursale->save();
        
        return redirect()->route('sucursales.registrada', $Sucursale->id);
        //return redirect('vista');
        //
    }

    public function registrada($id){
     $Sucursale = Sucursale::find($id);
     return view('sucursales.show', compact('Sucursale'));
    }

    public function pdf($id, Sucursale $Sucursale){

        $Sucursale = Sucursale::find($id);
        $pdf = \PDF::loadView('sucursales.pdf', compact('Sucursale'));
        return $pdf->stream('sucursales.pdf');
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
