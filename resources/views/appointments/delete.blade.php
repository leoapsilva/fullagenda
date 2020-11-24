@extends('layout')

@php
    $nav = explode("/", Request::path())[0];
@endphp 

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ __("navbar.".$nav) }}
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" action="/appointments/{{ $appointment->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="doctor"> {{ __('Marcado para') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="appointed_to" name="appointed_to" type="text" placeholder="" class="form-control" value="{{ Carbon\Carbon::parse($appointment->appointed_to)->format("d/m/Y H:i") }}">
                                </div>
                            </div>
                        
                            <!-- Doctor input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('Médico') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="doctor" name="doctor" type="text" placeholder="" class="form-control" value="{{ $appointment->doctor->name }} {{ $appointment->doctor->lastname }}">
                                </div>
                            </div>
                            
                            <!-- Doctor input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('Paciente') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="patient" name="patient" type="text" placeholder="" class="form-control" value="{{ $appointment->patient->name }} {{ $appointment->patient->lastname }}">
                                </div>
                            </div>

                            <!-- Mobile input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mobile">{{ __('appointments.mobile') }} </label>
                                <div class="col-md-9">
                                    <input disabled type="tel" id="mobile" name="mobile" class="form-control" placeholder="" value="{{ $appointment->patient->mobile }}" >
                                </div>
                            </div>

                            <!-- Specialty input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="specialty">{{ __('appointments.specialty') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="specialty" name="specialty" type="text" placeholder="" class="form-control" value="{{ $appointment->doctor->specialty }}">
                                </div>
                            </div>
                            
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-9 widget-left">
                                    </div>
                                    <div class="col-md-1 widget-right">
                                        <button type="button" class="btn btn-warning btn-md pull-left" onclick="location.href='/appointments'">Voltar</button>
                                    </div>
                                        <button type="submit" class="btn btn-danger btn-md pull-right">Confirmar</button>
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
