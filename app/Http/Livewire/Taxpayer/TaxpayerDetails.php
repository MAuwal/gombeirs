<?php

namespace App\Http\Livewire\Taxpayer;

use Livewire\Component;
use App\Models\Taxpayer;


class TaxpayerDetails extends Component
{
    public $taxpayer;

    public function mount($taxpayerId)
    {
        
        $this->taxpayer = Taxpayer::find($taxpayerId); 

        if (!$this->taxpayer) {
            abort(404); 
        }
    }

    public function render()
    {
        return view('livewire.taxpayer.taxpayer-details');
    }
}
