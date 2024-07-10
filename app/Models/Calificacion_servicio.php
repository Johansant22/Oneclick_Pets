<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion_servicio extends Model
{
    use HasFactory;
    protected $table = 'cabeza_facturas';
    protected $guarded = [];
    //Relación 1:M con cabeza factura
    public function sistemaDePago() {
        return $this->belongsTo('App\Models\Cabeza_factura');
    }

    public function controlComentarios() {
        return $this->hasMany('App\Models\Control_comentarios');
    }
}
