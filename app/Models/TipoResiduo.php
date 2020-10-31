<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DecResiduo;

class TipoResiduo extends Model
{
    protected $fillable = ['nombre'];


    public function tipo (){
        
        return $this->belongsTo('App\Models\DecReciduo','tipo');
        }
    use HasFactory;
}
