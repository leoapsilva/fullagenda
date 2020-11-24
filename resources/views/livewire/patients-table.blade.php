<div>
    <div class="row mb-4">
        <div class="col form-inline text-left">
            &nbsp; Per Page: &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
            </select>
            <input wire:model="search" class="form-control panel-button-tab-right" type="text" placeholder="Pesquisar...">
            <a class="panel-button-tab-right" type="button" href="/patients/create"><em class="fa fa-lg fa fa-plus color-blue">&nbsp; </em>Novo</a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        {{ __('patients.name') }}
                        @include('includes._sort-icon', ['field' => 'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('lastname')" role="button" href="#">
                        {{ __('patients.lastname') }}
                        @include('includes._sort-icon', ['field' => 'lastname'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('mobile')" role="button" href="#">
                        {{ __('patients.mobile') }}
                        @include('includes._sort-icon', ['field' => 'mobile'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('health_insurance_plan')" role="button" href="#">
                        {{ __('patients.health_plan') }}
                        @include('includes._sort-icon', ['field' => 'health_insurance_plan'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('birthday')" role="button" href="#">
                        {{ __('patients.birthdate') }}
                        @include('includes._sort-icon', ['field' => 'birthday'])
                    </a></th>
                    <th>
                        {{ __('patients.actions') }}
                        
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->lastname }}</td>
                        <td>{{ $patient->mobile }}</td>
                        <td>{{ $patient->health_insurance_plan }}</td>
                        <td>{{ $patient->birthday->format('d/m/Y') }}</td>
                        <td>
                            <div class="row">
                                <a class="btn" id="show" data-toggle="modal" href='/patients/{{ $patient->id }}'><em class="fa fa-lg fa fa-eye color-blue">&nbsp;</em></a>
                            
                                <a class="btn" id="edit" data-toggle="modal" href='/patients/{{ $patient->id }}/edit'><em class="fa fa-lg fa-pencil color-teal">&nbsp;</em></a>

                                <a class="btn" id="delete" data-toggle="modal" href='/patients/{{ $patient->id }}/delete'><em class="fa fa-lg fa-remove color-red">&nbsp;</em></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mb-4">
        <div class="col text-center">
            {{ $patients->firstItem() }} / {{ $patients->lastItem() }} Total: {{ $patients->total() }}
            {{ $patients->links() }}
        </div>
    </div>
</div>
