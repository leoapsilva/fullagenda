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

                    <form class="form-horizontal" action="/doctors" method="POST">
                        @csrf
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> {{ __('doctors.name') }} </label>
                                <div class="col-md-9 {{ $errors->first('name') ? 'form-group has-error' : ''}}">
                                    <input id="name" name="name" type="text" placeholder="" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                        
                            <!-- Lastname input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('doctors.lastname') }} </label>
                                <div class="col-md-9 {{ $errors->first('lastname') ? 'form-group has-error' : ''}}">
                                    <input id="lastname" name="lastname" type="text" placeholder="" class="form-control" value="{{ old('lastname') }}">
                                </div>
                            </div>
                            
                            <!-- Mobile input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mobile">{{ __('doctors.mobile') }} </label>
                                <div class="col-md-9 {{ $errors->first('mobile') ? 'form-group has-error' : ''}}">
                                    <input type="tel" id="mobile" name="mobile" class="form-control phone" placeholder="" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <div class="alert alert-danger"> {{ __($message) }} </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Specialty input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="specialty">{{ __('doctors.specialty') }} </label>
                                <div class="col-md-9 {{ $errors->first('specialty') ? 'form-group has-error' : ''}}">
                                    <input id="specialty" name="specialty" type="text" placeholder="" class="form-control" value="{{ old('specialty') }}">
                                </div>
                            </div>
                            
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-10 widget-left">
                                    </div>
                                    <div class="col-md-1 widget-right">
                                        <button type="button" class="btn btn-warning btn-md pull-left" onclick="location.href='/doctors'">Voltar</button>
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
