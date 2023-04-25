<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorRegistro extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'ritmo_cardiaco',
        'tasa_sangre',
        'frecuencia_respiratoria',
        'temperatura',
        'saludable'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'cria_id'
    ];

    /**
     * Relación con la cría.
     */

    public function cria()
    {
        return $this->belongsTo(Cria::class);
    }
}
