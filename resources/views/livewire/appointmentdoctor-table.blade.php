{{-- <div> --}}
    {{-- <div class="row mb-4"> --}}
        <div class="col mb-4 form-inline text-left">
            <select wire:model="perPage" class="form-control" style="display:none">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
            <input wire:model="searchDoctor" class="form-control panel-button-tab-center" type="text" placeholder="Nome ou especialidade">
            <select class="form-control" id="doctor_id" name="doctor_id" size="10">
                @foreach ($doctors as $doctor)

                <option value="{{ $doctor->id }}">{{ $doctor->specialty }} - {{ $doctor->name }} {{ $doctor->lastname }}</option>

                @endforeach
            </select>
        </div>
    {{-- </div> --}}
{{-- </div> --}}
  