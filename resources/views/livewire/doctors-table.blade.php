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
            <a class="panel-button-tab-right" type="button" href="/doctors/create"><em class="fa fa-lg fa fa-plus color-blue">&nbsp; </em>Novo</a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        {{ __('doctors.name') }}
                        @include('includes._sort-icon', ['field' => 'name'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('lastname')" role="button" href="#">
                        {{ __('doctors.lastname') }}
                        @include('includes._sort-icon', ['field' => 'lastname'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('mobile')" role="button" href="#">
                        {{ __('doctors.mobile') }}
                        @include('includes._sort-icon', ['field' => 'mobile'])
                    </a></th>
                    <th><a wire:click.prevent="sortBy('specialty')" role="button" href="#">
                        {{ __('doctors.specialty') }}
                        @include('includes._sort-icon', ['field' => 'specialty'])
                    </a></th>
                    <th>
                        {{ __('doctors.actions') }}
                        
                    </a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->lastname }}</td>
                        <td>{{ $doctor->mobile }}</td>
                        <td>{{ $doctor->specialty }}</td>
                        <td>
                            <div class="row">
                                <a class="btn" id="show" data-toggle="modal" href='/doctors/{{ $doctor->id }}'><em class="fa fa-lg fa fa-eye color-blue">&nbsp;</em></a>
                            
                                <a class="btn" id="edit" data-toggle="modal" href='/doctors/{{ $doctor->id }}/edit'><em class="fa fa-lg fa-pencil color-teal">&nbsp;</em></a>

                                <a class="btn" id="delete" data-toggle="modal" href='/doctors/{{ $doctor->id }}/delete'><em class="fa fa-lg fa-remove color-red">&nbsp;</em></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mb-4">
        <div class="col text-center">
            {{ $doctors->firstItem() }} / {{ $doctors->lastItem() }} Total: {{ $doctors->total() }}
            {{ $doctors->links() }}
        </div>
    </div>
</div>
