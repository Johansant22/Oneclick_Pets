<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $table = 'movimientos';
    protected $guarded = [];

     //Relacion a nivel de modelos 1:M con catalogo
    public function inventario() {
        return $this->belongsTo('App\Models\Inventario');
    }
     //Relaciones a nivel de modelo 1:M
    //con la tabla control devoluciones

    public function control_devoluciones() {
        return $this->hasMany('App\Models\Control_devoluciones');
    }
}
