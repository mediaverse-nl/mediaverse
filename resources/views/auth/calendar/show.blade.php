@extends('layouts.admin')

@section('title', 'Calendar show')
@section('breadcrumb', Breadcrumbs::render('home'))

@section('content')

    @php
        $td_start = new DateTime($calendar->start_tijd);
        $td_eind = new DateTime($calendar->eind_tijd);
    @endphp

    <div class="col-lg-6">

        {{ Form::open(['method' => 'DELETE', 'route' => ['board.calendar.destroy', $calendar->id]]) }}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm pull-right btn-xs'])!!}
        {!! Form::close()!!}
        <a href="{{route('board.calendar.edit', $calendar->id)}}" class="btn btn-default btn-xs pull-right btn-warning">Wijzigen</a>
        <br>
        <hr>
        <h1>{{$calendar->naam}}</h1>
        <p>{{$calendar->titel}}</p>
        @if($calendar->user_id != 0)
            <span>Voor: {{$calendar->user->name}}</span><hr>
        @endif
        <p>Van (<b>{{$td_start->format('Y-m-d - ga')}}</b>) tot (<b>{{$td_eind->format('Y-m-d - ga')}}</b>)</p>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Calendar
            </div>
            <div class="panel-body">
                {!! Form::model($calendar, array('route' => 'board.calendar.store', 'method' => 'PATCH', 'files' => 'true')) !!}

                {!! Form::hidden('id', $calendar->id) !!}
                <div class="form-group">
                    {!! Form::label('datasdepicker', 'datepicasdaker') !!}
                    {!! Form::text('start_tijd', $td_eind->format('Y-m-d'), ['class' => 'form-control datepicker', 'placeholder' => '', 'data-provide' => 'datepicker']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('naam', 'naam') !!}
                    {!! Form::number('naam', null, ['class' => 'form-control', 'max' => '10', 'min' => '5']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('naam', 'naam') !!}
                    {!! Form::text('naam', null, ['class' => 'form-control', 'placeholder' => '']) !!}
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

                <div class="form-group">
                    {!! Form::label('user', 'user') !!}
                    {!! Form::select('user', collect(\App\User::all())->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('aanpassen', ['class' => 'btn btn-primary btn-sm pull-right'])!!}

                {!! Form::close()!!}



            </div>
        </div>
    </div>

@endsection

@push('stylesheet')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

<style>
    .btn{
        margin-left: 10px;
    }
</style>
@endpush

@push('javascript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

<script>
    //        $('input[name="daterange"]').daterangepicker();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
//            startDate: '-3d'
    });
</script>
@endpush