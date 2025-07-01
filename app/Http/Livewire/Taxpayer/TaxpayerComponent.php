<?php

namespace App\Http\Livewire\Taxpayer;

use Livewire\Component;
use App\Models\Taxpayer;

class TaxpayerComponent extends Component
{
    public $taxpayers = [];

    public function mount()
    {
        // $this->loadTaxpayers();
    }

    public function loadTaxpayers()
    {
        // $this->taxpayers = Taxpayer::paginate(10)->toArray();
    }

    public function render()
    {
        // return view('livewire.taxpayer.taxpayer-component');
    }

    public function getTaxpayerRecords()
    {
        
        // $this->emit('taxpayerRecords', $this->taxpayers);
    }
}
