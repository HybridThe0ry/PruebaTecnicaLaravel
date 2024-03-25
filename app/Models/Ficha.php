<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ficha extends Model
{
    use HasFactory;

    protected $table = 'fichas';
    protected $fillable = [
        'nombre',
        'url',
        'publicada'
    ];

    /**
     * Get the user associated with the Ficha
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(Beneficio::class, 'ficha_id');
    }
}
