<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ficha_id',
        'fecha'
    ];

    /**
     * Get the user that owns the Beneficio
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ficha()
    {
        return $this->belongsTo(Ficha::class);
    }

    /**
     * Get the user associated with the Beneficio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function montosMaximos()
    {
        return $this->hasOne(MontoMaximo::class, 'beneficio_id');
    }

    /**
     * Get all of the comments for the Beneficio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beneficiosEntregados()
    {
        return $this->hasMany(BeneficioEntregado::class, 'beneficio_id');
    }
}
