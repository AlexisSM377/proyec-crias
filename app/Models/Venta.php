<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    /**
     * Relación a de venta a cliente.
     */
    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }

}
