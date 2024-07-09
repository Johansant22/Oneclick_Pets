<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $guarded = [];
    //Relacion a nivel de modelos 1:1 con:
    //tipo tercero, tipo documento, departamento, ciudad, tipo_pqrs y genero
    public function tipo_tercero() {
        return $this->hasOne('App\Models\Tipo_tercero');
    }

    public function tipo_documento() {
        return $this->hasOne('App\Models\Tipo_documento');
    }

    public function departamento() {
        return $this->hasOne('App\Models\Departamento');
    }

    public function ciudad() {
        return $this->hasOne('App\Models\Ciudad');
    }

    public function genero() {
        return $this->hasOne('App\Models\Genero');
    }

    //Relaciones a nivel de modelo 1:M
    //Con: empresa

    public function empresa() {
        return $this->belongsTo('App\Models\Empresa');
    }

    public function inventario() {
        return $this->belongsTo('App\Models\Inventario');
    }

    // Relación a nivel de modelo N:M
    //Con tipo_pqrs
    public function tipo_pqrs() {
        return $this->belongsToMany(Tipo_pqrs::class, 'person_tipo_pqrs'.'person_id','tipo_pqrs_id');
    }
}
