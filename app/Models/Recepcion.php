<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
    protected $fillable = ['*', 'fecha', 'propietario'];
    use HasFactory;
}
