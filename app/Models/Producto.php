<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $guarded = [];


//Relaciones a nivel de modelo 1:M
    //Con: inventario



    public function inventario() {
        return $this->belongsTo('App\Models\Inventario');
    }
}
