<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corral extends Model
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
    //protected $table = 'corrals';

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'corral_tipos_id'
    ];

    /**
     * Relación con tipo corral del corral.
     */
    public function corralTipo()
    {
        return $this->hasOne(CorralTipo::class);
    }

    public function crias()
    {
        return $this->hasMany(Cria::class);
    }
}
