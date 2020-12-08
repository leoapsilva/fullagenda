<div class="panel panel-default">
    <div class="panel-heading">
        {{ __("navbar.users") }} <span class="label label-success">{{ $users->total() }}</span>
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        <a class="panel-button-tab-right" type="button" href="/users/create"><em
                class="fa fa-lg fa fa-plus color-blue">&nbsp; </em></a>
    </div>
    <div class="panel-body">
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
                    <input wire:model="search" class="form-control panel-button-tab-right" type="text"
                        placeholder="Pesquisar...">
                </div>
            </div>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                                    {{ __('users.name') }}
                                    @include('includes._sort-icon', ['field' => 'name'])
                                </a></th>
                            <th><a wire:click.prevent="sortBy('email')" role="button" href="#">
                                    {{ __('users.email') }}
                                    @include('includes._sort-icon', ['field' => 'email'])
                                </a></th>
                            <th>
                                {{ __('users.actions') }}

                                </a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="row">
                                    <a class="btn" id="show" data-toggle="modal" href='/users/{{ $user->id }}'><em
                                            class="fa fa-lg fa fa-eye color-blue">&nbsp;</em></a>

                                    <a class="btn" id="edit" data-toggle="modal" href='/users/{{ $user->id }}/edit'><em
                                            class="fa fa-lg fa-pencil color-teal">&nbsp;</em></a>

                                    <a class="btn" id="delete" data-toggle="modal"
                                        href='/users/{{ $user->id }}/delete'><em
                                            class="fa fa-lg fa-remove color-red">&nbsp;</em></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mb-4">
                <div class="col text-center">
                    {{ $users->links('pagination-bootstrap') }}
                </div>
            </div>
        </div>
    </div>
</div>