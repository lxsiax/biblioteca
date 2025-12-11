<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable=[
        'titulo',
        'autor',
    ];

    public function ejemplares(){
        return $this->hasMany(Ejemplar::class);
    }
}
