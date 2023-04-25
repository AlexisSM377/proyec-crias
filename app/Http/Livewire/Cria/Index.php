<?php

namespace App\Http\Livewire\Cria;

use App\Models\Cria;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.cria.index', [
            'crias' => Cria::with(['clasificacionCarne', 'corral'])->orderBy('created_at', 'desc')->paginate(4)
        ]);
    }
}
