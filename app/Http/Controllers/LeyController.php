<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ley;

class LeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ley = Ley::latest()->paginate(15);
        return view('ley.index',compact('Ley'))
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
        return view ('ley.create');
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
            'titular' => 'required',
            'solicitante' => 'required',
            'email' => 'required',
            'ruttitular' => 'required',
            'rol' => 'required',
            'rutsolicitante' => 'required',
            'dir_comercial' => 'required',
            'dir_particular' => 'required',
            'telefono' => 'required',
            //'email' => 'required|email',    
        ]);  
        //
        $Ley = new Ley();
        $Ley-> titular = $request->get('titular');
        $Ley-> solicitante = $request->get('solicitante');
        $Ley-> email = $request->get('email');
        $Ley-> ruttitular = $request->get('ruttitular');
        $Ley-> rutsolicitante = $request->get('rutsolicitante');
        $Ley-> rol = $request->get('rol');
        $Ley-> dir_comercial = $request->get('dir_comercial');
        $Ley-> dir_particular = $request->get('dir_particular');
        $Ley-> telefono = $request->get('telefono');
        $Ley-> fecha = $request->get('fecha');
        $Ley-> solicitud1 = $request->get('solicitud1');
        $Ley-> solicitud2 = $request->get('solicitud2');
        $Ley->save();
        return redirect()->route('ley.registrada', $Ley->id);
        
    }

    public function registrada($id, Ley $Ley){
        $Ley = Ley::find($id);
        return view('ley.show', compact('Ley'));
       }
   
       public function pdf($id, Ley $Ley){
   
           $Ley = Ley::find($id);
           $pdf = \PDF::loadView('ley.pdf', compact('Ley'));
           return $pdf->stream('ley.pdf');
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
