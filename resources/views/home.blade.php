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

                    {{ __('You are logged in!') }}
                </div>
                    <br>

                    <button type="button" onclick="Enter()" class="btn btn-lg btn-primary">{{ __('Enter') }} </button>

                    <script> function Enter(){ window.location = "/dashboard";} </script>
                </div>
        </div>
    </div>
</div>
@endsection
