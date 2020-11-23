<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class PatientsTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortField = 'name';
    public $sortAsc = true;
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

/*         
        return view('livewire.patients-table', [
            'patients' => \App\Models\Patient::search( 
                $this->search
                )->get(),
        ]);

 */

        return view('livewire.patients-table', [
            'patients' => \App\Models\Patient::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);


//        return view('livewire.patients-table');
    }

}