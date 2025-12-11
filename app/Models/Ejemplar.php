<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ejemplar extends Model
{
    protected $fillable = [
        'codigo',
        'libro_id',
    ];

    public function libro(): BelongsTo {
        return $this->belongsTo(Libro::class);
    }

    public function prestamo(){
        return $this->hasOne(Prestamo::class);
    }
}
