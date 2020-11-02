<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inversione;

class InversionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inversione = Inversione::latest()->paginate(15);
        return view('inversiones.index',compact('Inversione'))
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
        return view('inversiones.create');
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
            'rec_rut' => 'required',
            'rec_nombre' => 'required',
            'representante' => 'required',
            'rol' => 'required',
            'montoinv' => 'required',
            'rec_rut' => 'required',
            'rec_nombre' => 'required',
            'rec_direccion' => 'required',
            'rec_rol' => 'required',
            //'email' => 'required|email',    
        ]);
        $Inversione = new Inversione();
       $Inversione-> rut = $request->get('rut');
       $Inversione-> nombre = $request->get('nombre');
       $Inversione-> representante =$request->get('representante');
       $Inversione-> rol = $request->get('rol');
       $Inversione-> rutrepresentante =$request->get('rutrepresentante');
       $Inversione-> direccion = $request->get('direccion');
       $Inversione-> telefono = $request->get('telefono');
       $Inversione-> email = $request->get('email');
       $Inversione-> montoinv = $request->get('montoinv');
       $Inversione-> rec_rut = $request->get('rec_rut');
       $Inversione-> rec_nombre = $request->get('rec_nombre');
       $Inversione-> rec_direccion =$request->get('rec_direccion');
       $Inversione-> rec_rol = $request->get('rec_rol');
       $Inversione-> save();
       return redirect()->route('inversiones.registrada', $Inversione->id);
       
        //
    }


    public function registrada($id, Inversione $Inversione ){
        $Inversione = Inversione::find($id);
        return view('inversiones.show', compact('Inversione'));

    }

    public function pdf($id, Inversione $Inversione){

        $Inversione = Inversione::find($id);
        $pdf = \PDF::loadView('inversiones.pdf', compact('Inversione'));
        return $pdf->stream('inversiones.pdf');
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
