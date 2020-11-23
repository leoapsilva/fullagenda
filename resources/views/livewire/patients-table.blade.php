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
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nome
                        @include('includes._sort-icon', ['field' => 'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('lastname')" role="button" href="#">
                        Sobrenome
                        @include('includes._sort-icon', ['field' => 'lastname'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('mobile')" role="button" href="#">
                        Celular
                        @include('includes._sort-icon', ['field' => 'mobile'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('health_insurance_plan')" role="button" href="#">
                        Plano
                        @include('includes._sort-icon', ['field' => 'health_insurance_plan'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('birthday')" role="button" href="#">
                        Nascimento
                        @include('includes._sort-icon', ['field' => 'birthday'])
                    </a></th>
                    <th>
                        Ações
                        
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
                                <a class="btn" id="show-user" data-toggle="modal" data-id='{{ $patient->id }}'><em class="fa fa-lg fa fa-eye color-blue">&nbsp;</em></a>
                                <a cla  ss="btn" id="edit-user" data-toggle="modal" data-id='{{ $patient->id }}'><em class="fa fa-lg fa-pencil color-teal">&nbsp;</em></a>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a id="delete-user" data-id='{{ $patient->id }}' class="btn"><em class="fa fa-lg fa-remove color-red">&nbsp;</em></a>
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
