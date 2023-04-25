<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    
    /**
     * Tabla asociado con el modelo.
     *
     * @var string
     */
    protected $fillable = [
        'name'
    ];

    protected $table = 'proveedores';

    public function crias()
    {
        return $this->hasMany(Cria::class);
    }
}
