<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MontosMaximos extends Model
{
    use HasFactory;
    protected $fillable = [
        'beneficio_id',
        'monto_minimo',
        'monto_maximo'
    ];

    /**
     * Get the user that owns the MontoMaximo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function beneficio()
    {
        return $this->belongsTo(Beneficio::class, 'beneficio_id');
    }
}
