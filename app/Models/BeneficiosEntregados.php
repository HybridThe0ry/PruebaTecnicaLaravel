<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeneficiosEntregados extends Model
{
    use HasFactory;
    protected $fillable = [
        'beneficio_id',
        'total',
        'estado',
        'fecha'
    ];

    /**
     * Get the user that owns the BeneficioEntregado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function beneficio()
    {
        return $this->belongsTo(Beneficio::class, 'beneficio_id');
    }
}
