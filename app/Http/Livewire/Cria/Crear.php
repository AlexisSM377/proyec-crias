<?php

namespace App\Http\Livewire\Cria;

use App\Models\ClasificacionCarne;
use App\Models\Corral;
use App\Models\Cria as CriaModel;
use App\Models\Proceso;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Crear extends Component
{
    public $name;
    public $descripcion;
    public $proveedor;
    public $corral;
    public $peso;
    public $musculo;
    public $marmoleo;
    public $costo;
    public $proceso;

    protected $rules = [
        'name' => 'required',
        'descripcion' => 'required',
        'proveedor' => 'required|numeric',
        'corral' => 'required|numeric',
        'peso' => 'required|numeric',
        'musculo' => 'required|numeric|between:1,7',
        'marmoleo' => 'required|numeric|between:1,5',
        'costo' => 'required|numeric',
        'proceso' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'nombre',
        'descripcion' => 'descripción',
        'proveedor' => 'proveedor',
        'carral' => 'corral',
        'peso' => 'peso',
        'musculo' => 'color musculo',
        'marmamoleo' => 'marmoleo',
        'costo' => 'costo',
        'proceso' => 'proceso'
    ];



    public function render()
    {
        return view('livewire.cria.crear', [
            'proveedores' => Proveedor::all(),
            'corrales' => Corral::all(),
            'procesos' => Proceso::all(),
        ]);
    }

    public function registerCalf()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $calf = new CriaModel();
            $calf-> name = $this->name;
            $calf->descripcion = $this->descripcion;
            $calf->color_muscular = $this->musculo;
            $calf->marmoleo = $this->marmoleo;
            $calf->peso = $this->peso;
            $calf->costo = $this->costo;
            $calf->proceso_id = $this->proceso;
            $calf->proveedor_id = $this->proveedor;
            $calf->corral_id = $this->corral;
            $tipoCarne = $this->obtenerClasificacionCarne($this->peso, $this->musculo, $this->marmoleo);
            $clasificacionCarne = ClasificacionCarne::where('type', $tipoCarne)->firstOrFail();
            $calf->clasificacion_carne_id = $clasificacionCarne->id;
            $calf->cria_cuarentena = false;

            $calf->save();

            $this->reset();
            $this->emit('saved');
            DB::commit();
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }

     /**
     * Obtener clasificación de la cría.
     * @param double $weight Peso de la cría.
     * @param integer $muscleColor Color musculo de la cría.
     * @param integer $marbling Marmoleo calidad de la cría.
     *
     * @return integer $meatType Tipo de clasificacion de carne.
     */
    public static function obtenerClasificacionCarne($weight, $muscleColor, $marbling)
    {
        $meatType = 0;
        // Clasificación de carne GRASA TIPO 1.
        if ($weight >= 15 && $weight <= 25 && $muscleColor >= 3 && $muscleColor <= 5 && $marbling <= 2) {
            $meatType = 1;
            return $meatType;
        }

        // Clasificación de carne GRASA TIPO 2.
        $meatType = 2;
        return $meatType;
    }
}
