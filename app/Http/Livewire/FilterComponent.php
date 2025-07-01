<?php



namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice;

class FilterComponent extends Component
{
    public $start_date;
    public $end_date;
    public $taxpayer_name;
    public $agency_name;
    // Add other filter fields as needed

    public $invoices; // Define the variable to hold the filtered results

    public function generateReport()
    {
        $query = Invoice::query();

        // Apply filters
        if ($this->start_date && $this->end_date) {
            $query->whereBetween('created_at', [$this->start_date, $this->end_date]);
        }

        if ($this->taxpayer_name) {
            $query->where('taxpayer_name', $this->taxpayer_name);
        }

        if ($this->agency_name) {
            $query->where('agency_name', $this->agency_name);
        }

        // Add other filters similarly

        $this->invoices = $query->get(); // Assign filtered results to $invoices variable

        // No need to emit event; Livewire automatically updates bindings
    }

    public function render()
    {
        return view('livewire.filter-component', ['invoices' => $this->invoices]);
    }
}



?>