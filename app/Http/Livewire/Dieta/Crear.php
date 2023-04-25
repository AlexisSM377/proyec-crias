<?php

namespace App\Http\Livewire\Dieta;

use App\Models\Corral;
use App\Models\Cria;
use App\Models\Dieta;
use App\Models\Proceso;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Crear extends Component
{
    public $cria;
    public $slug;
    public $corral;
    public $dieta;
    public $tratamiento;

    protected $rules = [
        'corral' => 'required|numeric',
        'dieta' => 'required',
        'tratamiento' => 'required'
    ];

    protected $validationAttributes = [
        'corral' => 'corral',
        'dieta' => 'dieta',
        'tratamiento' => 'tratamiento'
    ];

    public function mount()
    {
        $this->cria = Cria::where('id', $this->slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.dieta.crear', [
            'corrales' => Corral::where('corral_tipos_id', 2)->get()
        ]);
    }

    public function registrarCuarentena()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $sensor = new Dieta();
            $sensor->dieta = $this->dieta;
            $sensor->tratamiento = $this->tratamiento;
            $sensor->cria_id = $this->cria->id;
            $sensor->save();
            $this->cria->update([
                'proceso_id' => 1,
                'corral_id' => $this->corral
            ]);

            DB::commit();

            return redirect()->route('dieta.index')->with('success', 'Registro exitoso');
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }
}
