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

                    <form class="form-horizontal" action="/patients" method="POST">
                        @csrf
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> {{ __('patients.name') }} </label>
                                <div class="col-md-9 {{ $errors->first('name') ? 'form-group has-error' : ''}}">
                                    <input id="name" name="name" type="text" placeholder="" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                        
                            <!-- Lastname input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('patients.lastname') }} </label>
                                <div class="col-md-9 {{ $errors->first('lastname') ? 'form-group has-error' : ''}}">
                                    <input id="lastname" name="lastname" type="text" placeholder="" class="form-control" value="{{ old('lastname') }}">
                                </div>
                            </div>
                            
                            <!-- Mobile input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mobile">{{ __('patients.mobile') }} </label>
                                <div class="col-md-9 {{ $errors->first('mobile') ? 'form-group has-error' : ''}}">
                                    <input type="tel" id="mobile" name="mobile" class="form-control phone" placeholder="" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <div class="alert alert-danger"> {{ __($message) }} </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Birthdate input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="birthday">{{ __('patients.birthdate') }} </label>
                                <div class="col-md-9 {{ $errors->first('birthday') ? 'form-group has-error' : ''}}">
                                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="" value="{{ old('birthday') }}">
                                </div>
                            </div>

                            <!-- Health Insurance Plan input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="health_insurance_plan">{{ __('patients.health_plan') }} </label>
                                <div class="col-md-9 {{ $errors->first('health_insurance_plan') ? 'form-group has-error' : ''}}">
                                    <input id="health_insurance_plan" name="health_insurance_plan" type="text" placeholder="" class="form-control" value="{{ old('health_insurance_plan') }}">
                                </div>
                            </div>
                            
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-10 widget-left">
                                    </div>
                                    <div class="col-md-1 widget-right">
                                        <button type="button" class="btn btn-warning btn-md pull-left" onclick="location.href='/patients'">Voltar</button>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-md pull-right">Enviar</button>
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
