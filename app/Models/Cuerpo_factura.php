<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuerpo_factura extends Model
{
    use HasFactory;
    protected $table = 'cuerpo_facturas';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:M con inventario
    public function movimientos() {
        return $this->hasMany('App\Models\Inventario');
    }
       //Relacion a nivel de modelos 1:1 con inventario
    public function cabezaFactura() {
        return $this->hasOne('App\Models\Cabeza_factura');
    }
}
