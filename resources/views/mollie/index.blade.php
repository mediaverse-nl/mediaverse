@extends('layouts.app')

@section('title', trans('page.webshop.title'))

@push('meta-tags')

@endpush

@section('content')


    <div class="container">
        <div class="row" style="margin-top: 100px !important;">

            <div class="col-lg-4 col-lg-offset-4">

                @include('errors.message')

                <div class="panel panel-default">
                    <div class="panel-heading">Facturering</div>
                    <div class="panel-body">
                        <p>
                            Betaal hier uw factuur.
                        </p>
                        {{ Form::open(['method' => 'GET', 'route' => ['mollie.payment']]) }}

                            <div class="form-group">
                                {!! Form::label('order_id', 'factuur nummer', ['class' => 'cols-sm-2 control-label']) !!}
                                <div class="cols-sm-10">
                                    <div class="input-group" style="width: 100%;">
                                        {!! Form::text('order_id', null, ['class' => 'form-control']) !!}<br>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('postcode', 'postcode', ['class' => 'cols-sm-2 control-label']) !!}
                                <div class="cols-sm-10">
                                    <div class="input-group" style="width: 100%;">
                                        {!! Form::text('postcode', null, ['class' => 'form-control']) !!}<br>
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('checken', ['class' => 'btn btn-sm btn-primary pull-right'])!!}
                        {!! Form::close() !!}
                    </div>
                </div>


            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush