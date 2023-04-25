<?php

namespace App\Http\Livewire\Sensor;

use App\Models\Cria;
use App\Models\SensorRegistro;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Crear extends Component
{
    public $cria;
    public $corazon;
    public $respiracion;
    public $sangre;
    public $temperatura;

    protected $rules = [
        'cria' => 'required|numeric',
        'corazon' => 'required|numeric',
        'respiracion' => 'required|numeric',
        'sangre' => 'required|numeric',
        'temperatura' => 'required|numeric'
    ];

    protected $validationAttributes = [
        'cria' => 'cría',
        'corazon' => 'frecuencia cardiaca',
        'respiracion' => 'frecuencia respiratoria',
        'sangre' => 'frecuencia sanguínea',
        'temperatura' => 'temperatura'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        
        return view('livewire.sensor.crear', [
            'crias' => Cria::where('clasificacion_carne_id', 2)->where('cria_cuarentena',false)->orderBy('name')->get(),
        ]);
    }

    public function registrarSensor()
    {

        $this->validate();
        $saludable=$this->criaSaludable($this->temperatura, $this->corazon, $this->respiracion, $this->sangre);
        

        try {
            DB::beginTransaction();

            $sensorLog = new SensorRegistro();
            $sensorLog->ritmo_cardiaco = $this->corazon;
            $sensorLog->tasa_sangre = $this->sangre;
            $sensorLog->frecuencia_respiratoria = $this->respiracion;
            $sensorLog->temperatura= $this->temperatura;
            $sensorLog->cria_id = $this->cria;
            $sensorLog->saludable = $saludable;

            $sensorLog->save();

            $this->reset();
            $this->emit('saved');
            DB::commit();
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }

    public static function criaSaludable($temperatura, $corazon, $respiracion, $sangre)
    {
        if ($temperatura >= 37.5 && $temperatura <= 39.5 && $corazon >= 70 && $corazon <= 80 && $respiracion >= 15 && $respiracion <= 20 && $sangre >= 8 && $sangre <= 10) {
            return true;
        }

        return false;
    }
}
