<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';
    protected $guarded = [];
    // relacion 1:1 con tercero
    public function tercero()
    {
    return $this->belongsTo('App\Models\Person');
    }
}
