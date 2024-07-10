<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabeza_factura extends Model
{
    use HasFactory;
    protected $table = 'cabeza_facturas';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:M con inventario
    public function cuerpoFactura() {
        return $this->belongsTo('App\Models\Cuerpo_factura');
    }
    //Relación 1:M con sistema de pago
    public function sistemaDePago() {
        return $this->belongsTo('App\Models\Sistema_pago');
    }
     //Relación 1:1 con Estado de pedido
    public function estadoPedido() {
        return $this->belongsTo('App\Models\Estado_pedido');
    }

    //Relación 1:M con calificacion de servicio
    public function calificacionServicio() {
        return $this->hasMany('App\Models\Calificacion_servicio');
    }
}
