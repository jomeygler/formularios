<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Patente;

class PatenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Patente = Patente::latest()->paginate(15);
        return view('patentes.index',compact('Patente'))
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
        $Tramite = Tramite::all();
        return view('patentes.create', ['Tramite' => $Tramite]);
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
            'rep_rut' => 'required',
            'direccion' => 'required',
            'fecha' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',    
        ]);
         $Patente = new Patente();
         $Patente-> fecha = $request->get('fecha');
         $Patente-> ingeso = $request->get('ingeso');
         $Patente-> clasificacion = $request->get('clasificacion');
         $Patente-> tramite = $request->get('tramite');
         $Patente-> rolpatente = $request->get('rolpatente');
         $Patente-> rol1 = $request->get('rol1');
         $Patente-> rol2 = $request->get('rol2');
         $Patente-> rol3 = $request->get('rol3');
         $Patente-> rol4 = $request->get('rol4');
         $Patente-> rol5 = $request->get('rol5');
         $Patente-> rol6 = $request->get('rol6');
         $Patente-> rol7 = $request->get('rol7');
         $Patente-> rol8 = $request->get('rol8');
         $Patente-> rol9 = $request->get('rol9');
         $Patente-> tramiterol = $request->get('tramiterol');
         $Patente-> nombre = $request->get('nombre');
         $Patente-> direccion = $request->get('direccion');
         $Patente-> rut = $request->get('rut');
         $Patente-> telefono = $request->get('telefono');
         $Patente-> celular = $request->get('celular');
         $Patente-> email = $request->get('email');
         $Patente-> rep_nombre = $request->get('rep_nombre');
         $Patente-> rep_direccion = $request->get('rep_direccion');
         $Patente-> rep_rut = $request->get('rep_rut');
         $Patente-> rep_telefono = $request->get('rep_telefono');
         $Patente-> rep_celular = $request->get('rep_celular');
         $Patente-> rep_email = $request->get('rep_email');
         $Patente-> giro = $request->get('giro');
         $Patente-> capital = $request->get('capital');
         $Patente-> avaluo = $request->get('avaluo');
         $Patente-> rolsii = $request->get('rolsii');
         $Patente-> propaganda = $request->get('propaganda');
         $Patente-> luminoso_aviso = $request->get('luminoso_aviso');
         $Patente-> noluminoso_aviso = $request->get('noluminoso_aviso');
         $Patente-> neon_aviso = $request->get('neon_aviso');
         $Patente-> ubicacion = $request->get('ubicacion');
         $Patente-> save();
         //return var_dump($Patente);
         return view ('patentes.show', compact('Patente'));
        //
    }

    public function registrada($id, Patente $Patente){
        $Patente = Patente::find($id);
        return view('patentes.show', ['Patente'=>Patente::join('tramites', 'tramites.id', '=', 'patentes.tramite')
        ->select('patentes.*', 'tramites.nombre as nombretramite')->find($id)]);
        //
    }

    public function pdf($id, Patente $Patente){
        $Patente = Patente::find($id);
       
        $pdf = \PDF::loadView('patentes.pdf', compact('Patente'));
        return $pdf->stream('patentes.pdf',['Patente'=>Patente::join('tramites', 'tramites.id', '=', 'patentes.tramite')
        ->select('patentes.*', 'tramites.nombre as nombretramite')]);
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
