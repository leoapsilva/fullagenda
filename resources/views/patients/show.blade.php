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

                    <form class="form-horizontal" action="/patients" method="GET">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> {{ __('patients.name') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="name" name="name" type="text" placeholder="" class="form-control" value="{{ $patient->name }}">
                                </div>
                            </div>
                        
                            <!-- Lastname input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('patients.lastname') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="lastname" name="lastname" type="text" placeholder="" class="form-control" value="{{ $patient->lastname }}">
                                </div>
                            </div>
                            
                            <!-- Mobile input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mobile">{{ __('patients.mobile') }} </label>
                                <div class="col-md-9">
                                    <input disabled type="tel" id="mobile" name="mobile" class="form-control" placeholder="" value="{{ $patient->mobile }}" >
                                </div>
                            </div>

                            <!-- Birthdate input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="birthdate">{{ __('patients.birthdate') }}</label>
                                <div class="col-md-9">
                                    <input disabled type="date" id="birthday" name="birthday" class="form-control" placeholder=""  value="{{ $patient->birthday->format('Y-m-d') }}">
                                </div>
                            </div>

                            <!-- Health Insurance Plan input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="health_insurance_plan">{{ __('patients.health_plan') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="health_insurance_plan" name="health_insurance_plan" type="text" placeholder="" class="form-control" value="{{ $patient->health_insurance_plan }}">
                                </div>
                            </div>
                            
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <button type="submit" class="btn btn-warning btn-md pull-right">Voltar</button>
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
