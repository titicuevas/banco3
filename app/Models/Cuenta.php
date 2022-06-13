<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    /**
     * The clientes that belong to the Cuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clientes()
    {
        return $this->belongsToMany(Clientes::class,'titulares');
    }

    /**
     * Get all of the movimientos for the Cuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }

    

}

/*

cliente_cuenta = titulares

*/
