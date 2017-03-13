@extends('layouts.admin')

@section('title', 'calendar')

@section('content')
    <div class="col-lg-8">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Calendar
            </div>
            <div class="panel-body">
                {!! Form::open(array('route' => 'board.calendar.store', 'method' => 'POST', 'files' => 'true')) !!}

                    {{--{!! Form::hidden('id', $user->id) !!}--}}
                    <div class="form-group">
                        {!! Form::label('datasdepicker', 'datepicasdaker') !!}
                        {!! Form::text('start_tijd', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'data-provide' => 'datepicker']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('naam', 'naam') !!}
                        {!! Form::text('naam', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('titel', 'titel') !!}
                        {!! Form::text('titel', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('status', 'status') !!}
                        {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                    </div>

                    {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

                {!! Form::close()!!}

            </div>
        </div>
    </div>
@stop


@push('javascript')
{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>--}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

    <script>
//        $('input[name="daterange"]').daterangepicker();
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
//            startDate: '-3d'
        });
    </script>
@endpush
@push('stylesheet')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

@endpush