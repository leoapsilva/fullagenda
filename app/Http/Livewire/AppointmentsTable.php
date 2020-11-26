<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AppointmentsTable extends Component
{
    use WithPagination;
    
    public $perPage = 5;
    public $sortField = 'appointed_to';
    public $sortAsc = true;
    public $searchAppointment = '';

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
        return view('livewire.appointments-table', [
            'appointments' => \App\Models\Appointment::search($this->searchAppointment)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }

}