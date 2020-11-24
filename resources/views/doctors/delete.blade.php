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

                    <form class="form-horizontal" action="/doctors/{{ $doctor->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name"> {{ __('doctors.name') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="name" name="name" type="text" placeholder="" class="form-control" value="{{ $doctor->name }}">
                                </div>
                            </div>
                        
                            <!-- Lastname input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="lastname">{{ __('doctors.lastname') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="lastname" name="lastname" type="text" placeholder="" class="form-control" value="{{ $doctor->lastname }}">
                                </div>
                            </div>
                            
                            <!-- Mobile input -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="mobile">{{ __('doctors.mobile') }} </label>
                                <div class="col-md-9">
                                    <input disabled type="tel" id="mobile" name="mobile" class="form-control" placeholder="" value="{{ $doctor->mobile }}" >
                                </div>
                            </div>

                            <!-- Specialty input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="specialty">{{ __('doctors.specialty') }} </label>
                                <div class="col-md-9">
                                    <input disabled id="specialty" name="specialty" type="text" placeholder="" class="form-control" value="{{ $doctor->specialty }}">
                                </div>
                            </div>
                            
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-9 widget-left">
                                    </div>
                                    <div class="col-md-1 widget-right">
                                        <button type="button" class="btn btn-warning btn-md pull-left" onclick="location.href='/doctors'">Voltar</button>
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
