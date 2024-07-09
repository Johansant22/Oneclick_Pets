<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;
    protected $table = 'catalogos';
    protected $guarded = [];
    // relacion 1:M con inventario
    public function inventario()
    {
    return $this->hasMany('App\Models\Inventario');
    }


}
