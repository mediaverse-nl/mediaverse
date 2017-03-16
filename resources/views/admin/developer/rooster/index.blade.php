@extends('layouts.admin')

@section('title', 'Calendar')

@section('content')
    <div class="col-lg-7">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
    </div>
    <div class="col-lg-4">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1default" data-toggle="tab">Vandaag</a></li>
                    <li><a href="#tab2default" data-toggle="tab">Deadline</a></li>
                    <li><a href="#tab3default" data-toggle="tab">Afspraak</a></li>
                    <li><a href="#tab4default" data-toggle="tab">Rooster</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1default">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>begin</th>
                                    <th>eind</th>
                                    <th>naam</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list_today as $item)
                                    @php
                                        $dt_eind = new \Carbon\Carbon($item->eind_tijd);
                                        $dt_start = new \Carbon\Carbon($item->start_tijd);
                                    @endphp
                                    <tr>
                                        <td>{{$dt_start->format('h:ia')}}</td>
                                        <td>{{$dt_eind->format('h:ia')}}</td>
                                        <td>{{$item->naam}}</td>
                                        <td><a class="btn btn-default btn-xs" href="{{route('board.calendar.show', $item->id)}}">bekijken</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                        {{--{{dd($calendar->get())}}--}}
                    </div>
                    <div class="tab-pane fade" id="tab2default">
                        {!! Form::open(['route' => 'board.calendar.store', 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('datum', 'start datum') !!}
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    {!! Form::text('start_tijd', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'data-provide' => 'datepicker']) !!}
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('uur', 'uur') !!}
                                {!! Form::number('tijd_uur', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '23']) !!}
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('min', 'min') !!}
                                {!! Form::number('tijd_min', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '59', 'step' => '15']) !!}
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::label('datum', 'eind datum') !!}
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    {!! Form::text('eind_tijd', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'data-provide' => 'datepicker']) !!}
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('uur', 'uur') !!}
                                {!! Form::number('tijd_uur_eind', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '23']) !!}
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('min', 'min') !!}
                                {!! Form::number('tijd_min_eind', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '59', 'step' => '15']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('naam', 'naam') !!}
                            {!! Form::text('naam', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('titel', 'beschrijving') !!}
                            {!! Form::text('titel', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                            {{--                            {!! Form::label('status', 'status') !!}--}}
                            {!! Form::hidden('status', 'event', ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>

                        {!! Form::submit('Toevoegen', ['class' => 'btn btn-success pull-right'])!!}

                        {!! Form::close()!!}
                    </div>
                    <div class="tab-pane fade" id="tab3default">Default 2</div>
                    <div class="tab-pane fade" id="tab4default">
                        {!! Form::open(['route' => 'board.calendar.store', 'method' => 'POST']) !!}
                        {!! Form::hidden('status', 'rooster', ['class' => 'form-control', 'placeholder' => '']) !!}
                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label('datum', 'datum') !!}
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    {!! Form::text('start_tijd', null, ['class' => 'form-control datepicker', 'placeholder' => '', 'data-provide' => 'datepicker']) !!}
                                </div>
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('uur', 'uur') !!}
                                {!! Form::number('tijd_uur', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '23']) !!}
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('min', 'min') !!}
                                {!! Form::number('tijd_min', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '59', 'step' => '15']) !!}
                            </div>
                            <div class="form-group col-lg-6">

                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('uur', 'uur') !!}
                                {!! Form::number('tijd_uur_eind', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '23']) !!}
                            </div>
                            <div class="form-group col-lg-3">
                                {!! Form::label('min', 'min') !!}
                                {!! Form::number('tijd_min_eind', 0, ['class' => 'form-control pull-right', 'min' => '0', 'max' => '59', 'step' => '15']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('user', 'user') !!}
                            {!! Form::select('user', collect(\App\User::all())->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('naam', 'naam') !!}
                            {!! Form::text('naam', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('titel', 'titel') !!}
                            {!! Form::text('titel', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                        </div>

                        {!! Form::submit('Toevoegen', ['class' => 'btn btn-success pull-right'])!!}

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@push('javascript')
{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>--}}

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/locale/nl.js"></script>

<script>
    var url = 'http://localhost:8000/board/calendar';
    var task_id = 1;
    //        $('input[name="daterange"]').daterangepicker();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
//            setDate: new Date(),
        startDate: '0d'
    });
</script>
@endpush
@push('stylesheet')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<style>
    .datepicker-dropdown{
        margin-top: 50px !important;
    }

    .panel.with-nav-tabs .panel-heading{
        padding: 5px 5px 0 5px;
    }
    .panel.with-nav-tabs .nav-tabs{
        border-bottom: none;
    }
    .panel.with-nav-tabs .nav-justified{
        margin-bottom: -1px;
    }
</style>
@endpush