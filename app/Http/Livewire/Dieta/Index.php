<?php

namespace App\Http\Livewire\Dieta;

use App\Models\Cria;
use App\Models\Dieta;
use App\Models\SensorRegistro;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.dieta.index', [
            'dietas' => Dieta::paginate(10)
        ]);
    }
}
