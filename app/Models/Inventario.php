<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $guarded = [];

    //Relaciones a nivel de modelo 1:M
    //Con: person

    public function tercero() {
        return $this->hasMany('App\Models\Person');
    }

    public function producto() {
        return $this->hasMany('App\Models\Producto');
    }
    //Relacion a nivel de modelos 1:M con catalogo
    public function catalogo() {
        return $this->belongsTo('App\Models\Catalogo');
    }


}
