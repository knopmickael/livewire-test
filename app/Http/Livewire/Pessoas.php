<?php

namespace App\Http\Livewire;

use App\Models\Pessoa;
use Livewire\Component;

class Pessoas extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.pessoas', [
            'pessoas' => Pessoa::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
