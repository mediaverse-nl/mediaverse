@extends('layouts.admin')

@section('title', 'Taak aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')
    {!! Form::model($task, array('route' => 'developer.project.update', 'method' => 'patch')) !!}

        <div class="col-md-6">
            {!! Form::hidden('id', $task->id) !!}
            @if( $task->status == 'running')
                {!! Form::hidden('user', $task->user_id) !!}
            @else

            @endif
            <div class="form-group">
                {!! Form::label('task_name', 'Taak') !!}
                {!! Form::text('task_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('do_min', 'Ingeschatte tijd (min)') !!}
                {!! Form::number('do_min', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                    {!! Form::label('moscow', 'moscow') !!}
                    {!! Form::select('moscow', ['must' => 'must','should ' => 'should ','could ' => 'could ', "won't" => "won't",], null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-lg-6">
                    {!! Form::label('user', 'user') !!}
                    {!! Form::select('user', collect($users)->pluck('name', 'id'), $task->user_id, ['class' => 'form-control',  $task->status == 'running' ? 'disabled' : '']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', 'description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('remark', 'remark') !!}
                {!! Form::textarea('remark', null, ['class' => 'form-control', 'rows' => '3']) !!}
            </div>

            {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

        </div>

    {!! Form::close() !!}

@endsection

@push('stylesheet')
    <style>
        .button{
            margin-top: -52px !important;
            border-radius: 0px;
        }
    </style>
@endpush