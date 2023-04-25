<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cria extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'peso',
        'color_muscular',
        'marmoleo',
        'costo',
        'name',
        'descripcion',
        'cria_cuarentena',
        'proveedor_id',
        'clasificacion_carne_id',
        'cria_id',
        'dieta_id',
        'proceso_id',
        'corral_id'
    ];


    /**
     * Relación con clasificación de carne.
     */
    public function clasificacionCarne()
    {
        return $this->belongsTo(ClasificacionCarne::class);
    }

    /**
     * Relación con corral de la cría.
     */
    public function corral()
    {
        return $this->belongsTo(Corral::class);
    }

    /**
     * Relación con proveedor.
     */
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    /**
     * Relación de dieta a cria.
     */
    public function tratamiento()
    {
        return $this->hasOne(Dieta::class);
    }

}
