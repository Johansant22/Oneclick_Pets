<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudads';
    protected $guarded = [];
    // relacion 1:1 con tercero
    public function tercero()
    {
    return $this->belongsTo('App\Models\Person');
    }
}
