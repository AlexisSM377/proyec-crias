<?php

namespace App\Http\Livewire\Sensor;

use App\Models\Cria;
use App\Models\SensorRegistro;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $criasConDieta = Cria::has('tratamiento')->pluck('id');
        return view('livewire.sensor.index', [
            'sensorLogs' => SensorRegistro::whereNotIn('cria_id',$criasConDieta)->where('saludable',false)->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
