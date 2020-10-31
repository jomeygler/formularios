<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IngresoDoc;

class IngresoDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IngresoDoc = IngresoDoc::latest()->paginate(15);
        return view('ingresodoc.index',compact('IngresoDoc'))
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
        return view ('ingresodoc.create');
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
        $IngresoDoc = new IngresoDoc(); 
        
        $IngresoDoc-> permiso = $request->get('permiso');
        $IngresoDoc-> proyecto = $request->get('proyecto');
        $IngresoDoc-> rol = $request->get('rol');
        $IngresoDoc-> ubicacion = $request->get('ubicacion');
        $IngresoDoc-> arquitecto = $request->get('arquitecto');
        $IngresoDoc-> revisor = $request->get('revisor');
        $IngresoDoc-> expediente = $request->get('expediente');
        $IngresoDoc-> fecha = $request->get('fecha');
        $IngresoDoc-> descrip = $request->get('descrip');
        $IngresoDoc-> declaracion = $request->get('declaracion');
        $IngresoDoc-> propietario = $request->get('propietario');
        $IngresoDoc-> save();
        return view('ingresodoc.show', compact('IngresoDoc'));

        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registrada($id, IngresoDoc $IngresoDoc)
    {
        $IngresoDoc = IngresoDoc::find($id);
       return view('ingresodoc.show', compact('IngresoDoc'));
        //
    }

    public function pdf($id, IngresoDoc $IngresoDoc){

        $IngresoDoc = IngresoDoc::find($id);
        $pdf = \PDF::loadView('ingresodoc.pdf', compact('IngresoDoc'));
        return $pdf->stream('ingresodoc.pdf');
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
