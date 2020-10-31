<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoReciduo;

class DecResiduo extends Model
{
    protected $fillable = [ 'tipo','fecha','calle','rol','manzana','lote','localidad','plano_lote','empresa','rut','representante','rutrepresentante',
    'direccion','numero','comuna','telefono','celular','email','pro_empresa','pro_rut','pro_representante','pro_rutrepresentante',
    'pro_direccion','pro_numero','pro_comuna','pro_telefono','pro_celular','pro_email','pro_patente','res_calle','res_numero',
    'res_rol','res_manzana','res_lote','res_localidad','res_sanitaria','res_detalle','material1','material2','material3',
    'material4','material5','cantidad1','cantidad2','cantidad3','cantidad4','cantidad5','notas','descrip_proc','antecedentes'];

    public function tiporesiduo (){
         return $this->hasMany('App\Models\TipoReciduo','id');
    }
        use HasFactory;
}
