<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestamo extends Model
{
    protected $fillable =  [
        'cliente_id',
        'ejemplar_id',
        'fecha_hora',
    ];

    protected $casts = [
        'fecha_hora' => 'datetime',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function ejemplar(): BelongsTo {
        return $this->belongsTo(Ejemplar::class);
    }
}
