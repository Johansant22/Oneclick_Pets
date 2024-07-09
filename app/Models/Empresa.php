<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $guarded = [];

    //Relaciones a nivel de modelo 1:M
    //Con: empresa

    public function tercero() {
        return $this->hasMany('App\Models\Person');
    }
}
