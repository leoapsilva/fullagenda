<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class AppointmentpatientTable extends Component
{
    public $perPage = 50;
    public $sortField = 'created_at';
    public $sortAsc = false;
    public $search = '';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.appointmentpatient-table', [
            'patients' => Patient::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }

}