<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patente;

class tramite extends Model
{
    protected $fillable = ['id','nombre'];
    public function patente (){
        
        return $this->belongsTo('App\Models\Patente','tramite');
        }
    use HasFactory;
}
