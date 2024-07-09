<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table = 'generos';
    protected $guarded = [];
    // relacion 1:1 con tercero
    public function tercero()
    {
    return $this->belongsTo('App\Models\Person');
    }
}
