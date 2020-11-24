@extends('layout')

@php
    $nav = explode("/", Request::path())[0];
@endphp 

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ __("Alterar agendamento") }}
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" action="/appointments/{{ $appointment->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <fieldset>

                            <div class="row md-12">

                                <!-- Doctor input-->
                                {{-- <div class="form-group"> --}}
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Médico
                                            </div>
                                            <div class="panel-body text-center">
                                                {{ $appointment->doctor->name }} {{ $appointment->doctor->lastname }}
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}

                                <!-- Patient input-->
                                {{-- <div class="form-group"> --}}
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Paciente
                                            </div>
                                            <div class="panel-body text-center">
                                                {{ $appointment->patient->name }} {{  $appointment->patient->lastname }}
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}

                                <!-- Appointed To input-->
                                {{-- <div class="form-group"> --}}
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                Agendar para
                                            </div>
                                            <div class="panel-body">
                                                @include('appointments.appointed-datetime')
                                            </div>
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            </div><!--/.row-->
                            
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}">

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-10 widget-left">
                                    </div>
                                    <div class="col-md-1 widget-right">
                                        <button type="button" class="btn btn-warning btn-md pull-left" onclick="location.href='/appointments'">Voltar</button>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-md pull-right">Alterar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div><!--/.row-->
@endsection

@section('extra_js')

@endsection
