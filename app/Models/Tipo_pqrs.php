<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_pqrs extends Model
{
    use HasFactory;
    protected $table = 'tipo_pqrs';
    protected $guarded = [];
    // Relación a nivel de modelo N:M
    //Con tipo_pqrs
    public function person() {
        return $this->belongsToMany(Person::class, 'person_tipo_pqrs'.'tipo_pqrs_id', 'person_id');
    }
}
