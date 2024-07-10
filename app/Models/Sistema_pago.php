<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema_pago extends Model
{
    use HasFactory;
    protected $table = 'sistema_pagos';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:M con cabeza factura
    public function cabezaFactura() {
        return $this->hasMany('App\Models\Cabeza_factura');
    }
}
