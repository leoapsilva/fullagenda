{{-- <div> --}}
    <div class="row mb-4">
        <div class="col mb-4 form-inline text-left">
            <select wire:model="perPage" class="form-control" style="display:none">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
            <input wire:model="search" class="form-control panel-button-tab-center" type="text" placeholder="Nome ou sobrenome...">
            <select class="form-control" name="patient_id" size="10">
                @foreach ($patients as $patient)

                <option value="{{ $patient->id }}">{{ $patient->name }} {{ $patient->lastname }}</option>

                @endforeach
            </select>
        </div>
    </div>
{{-- </div> --}}
  