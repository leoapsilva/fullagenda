@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row justify-content-center">
                            {{ __('You are logged in!') }}
                        </div>
                        <div class="row justify-content-center">
                            <button type="button" onclick="window.location = '/dashboard'" class="btn btn-lg btn-primary">{{ __('Enter') }} </button>
                        </div>
                </div>

                </div>
        </div>
    </div>
</div>
@endsection
