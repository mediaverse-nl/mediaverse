@extends('layouts.admin')

@section('title', 'nieuw project')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')
    {!! Form::model($project, array('route' => 'board.project.update', 'method' => 'patch')) !!}

    <div class="col-md-6">
            {!! Form::hidden('id', $project->id) !!}
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('customer', 'customer') !!}
                {!! Form::text('customer', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('price', 'price') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('duur', 'duur') !!}
                {!! Form::text('duur', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('email', 'email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('type', 'type') !!}
                {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('uml', 'uml') !!}
                {!! Form::file('uml', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('usecase', 'usecase') !!}
                {!! Form::file('usecase', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('pva', 'pva') !!}
                {!! Form::file('pva', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('contract', 'contract') !!}
                {!! Form::file('contract', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('type', 'type') !!}
                {{--{!! Form::select('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
                {{ Form::select('type', ['color' => 'kleur', 'battery' => 'battery', 'nicotine' => 'nicotine'], null, ['class' => 'form-control']) }}
            </div>

            {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

    </div>

    <div class="col-md-6">

        <a href="{{route('board.project.create')}}">nieuw skill</a>

        <hr>
        <div class="form-group">
            {!! Form::label('roles', 'roles') !!}<br>
            @foreach($roles as $role)
                {!! Form::checkbox('roles[]', $role->id, in_array($role->id, collect($project->projectRole->lists('role_id'))->toArray())) !!}
                {!! Form::label('roles', $role->status) !!}<br>
            @endforeach
        </div>

    </div>

    {!! Form::close() !!}

@endsection