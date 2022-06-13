<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * The cuentas that belong to the Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cuentas()
    {
        return $this->belongsToMany(Cuenta::class,'titulares');
    }

    
}

/*

cliente_cuenta = titulares

*/
