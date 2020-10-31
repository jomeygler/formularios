<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tramite;

class Patente extends Model
{
    protected $fillable = ['fecha', 'ingeso', 'clasificacion', 'tramite', 'rolpatente', 'rol1', 'rol2', 'rol3',
    'rol4', 'rol5', 'rol6', 'rol7', 'rol8', 'rol9', 'tramiterol', 'nombre', 'direccion',
    'rut', 'telefono', 'celular', 'email', 'rep_nombre', 'rep_direccion',  'rep_rut',
    'rep_telefono', 'rep_celular', 'rep_email', 'giro', 'capital', 'avaluo', 'rolsii', 'propaganda',
    'luminoso_aviso', 'noluminoso_aviso', 'neon_aviso', 'ubicacion', 'nombretramite'];

    public function tramites (){
        return $this->hasMany('App\Models\Tramite','id');
    }
    use HasFactory;
}
