<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\DecResiduo;
use App\Models\TipoResiduo;


use Illuminate\Http\Request;

class DecResiduosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DecResiduo = DecResiduo::latest()->paginate(15);
        return view('residuos.index',compact('DecResiduo'))
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

        $TipoResiduo = TipoResiduo::all();
        return view('residuos.create', ['TipoResiduo' => $TipoResiduo]);
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
            'empresa' => 'required',
            'direccion' => 'required',
            'pro_rut' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',    
        ]);
        $DecResiduo = new DecResiduo();
        $DecResiduo-> tipo = $request->get('tipo');
        $DecResiduo-> fecha = $request->get('fecha');
        $DecResiduo-> calle = $request->get('calle');
        $DecResiduo-> rol = $request->get('rol');
        $DecResiduo-> manzana = $request->get('manzana');
        $DecResiduo-> lote = $request->get('lote');
        $DecResiduo-> localidad = $request->get('localidad');
        $DecResiduo-> plano_lote = $request->get('plano_lote');
        $DecResiduo-> empresa = $request->get('empresa');
        $DecResiduo-> rut = $request->get('rut');
        $DecResiduo-> representante = $request->get('representante');
        $DecResiduo-> rutrepresentante = $request->get('rutrepresentante');
        $DecResiduo-> direccion = $request->get('direccion');
        $DecResiduo-> numero = $request->get('numero');
        $DecResiduo-> comuna = $request->get('comuna');
        $DecResiduo-> telefono = $request->get('telefono');
        $DecResiduo-> celular = $request->get('celular');
        $DecResiduo-> email = $request->get('email');
        $DecResiduo-> pro_empresa = $request->get('pro_empresa');
        $DecResiduo-> pro_rut = $request->get('pro_rut');
        $DecResiduo-> pro_representante = $request->get('pro_representante');
        $DecResiduo-> pro_rutrepresentante = $request->get('pro_rutrepresentante');
        $DecResiduo-> pro_direccion = $request->get('pro_direccion');
        $DecResiduo-> pro_numero = $request->get('pro_numero');
        $DecResiduo-> pro_comuna = $request->get('pro_comuna');
        $DecResiduo-> pro_telefono = $request->get('pro_telefono');
        $DecResiduo-> pro_celular = $request->get('pro_celular');
        $DecResiduo-> pro_email = $request->get('pro_email');
        $DecResiduo-> pro_patente = $request->get('pro_patente');
        $DecResiduo-> res_calle = $request->get('res_calle');
        $DecResiduo-> res_numero = $request->get('res_numero');
        $DecResiduo-> res_rol = $request->get('res_rol');
        $DecResiduo-> res_manzana = $request->get('res_manzana');
        $DecResiduo-> res_lote = $request->get('res_lote');
        $DecResiduo-> res_localidad = $request->get('res_localidad');
        $DecResiduo-> res_sanitaria = $request->get('res_sanitaria');
        $DecResiduo-> res_detalle = $request->get('res_detalle');
        $DecResiduo-> material1 = $request->get('material1');
        $DecResiduo-> material2 = $request->get('material2');
        $DecResiduo-> material3 = $request->get('material3');
        $DecResiduo-> material4 = $request->get('material4');
        $DecResiduo-> material5 = $request->get('material5');
        $DecResiduo-> cantidad1 = $request->get('cantidad1');
        $DecResiduo-> cantidad2 = $request->get('cantidad2');
        $DecResiduo-> cantidad3 = $request->get('cantidad3');
        $DecResiduo-> cantidad4 = $request->get('cantidad4');
        $DecResiduo-> cantidad5 = $request->get('cantidad5');
        $DecResiduo-> notas = $request->get('notas');
        $DecResiduo-> descrip_proc = $request->get('descrip_proc');
        $DecResiduo-> antecedentes = $request->get('antecedentes');
        $DecResiduo->save();
        //return redirect()->route('residuos', compact('DecResiduo'));
        return view('residuos.show', compact('DecResiduo'));

        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registrada($id, DecResiduo $DecResiduo){
        $DecResiduo = DecResiduo::find($id);

        return view('residuos.show', compact('DecResiduo'));
        //
    }

    public function pdf($id, DecResiduo $DecResiduo){

        $DecResiduo = Decresiduo::find($id);
        $pdf = \PDF::loadView('residuos.pdf', compact('DecResiduo'));
        return $pdf->stream('residuos.pdf');
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
