<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Doctor;

class AppointmentdoctorTable extends Component
{
    use WithPagination;

    public $perPage = 100;
    public $sortField = 'name';
    public $sortAsc = true;
    public $searchDoctor = '';

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
        return view('livewire.appointmentdoctor-table', [
            'doctors' => Doctor::search($this->searchDoctor)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }

}