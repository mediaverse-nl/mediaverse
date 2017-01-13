@extends('layouts.admin')

@section('title', 'Project aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    {!! Form::open(['route' => 'board.project.store']) !!}

        <div class="col-md-4">

        {{--{!! Form::hidden('id', $project->id) !!}--}}
        <!-- created_at -->
            <div class="form-group">
                {!! Form::label('name', 'project naam') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('customer', 'klant naam') !!}
                {!! Form::text('customer', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('website', 'website') !!}
                {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('email', 'email') !!}
                <small class="text-muted">Klant</small>
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('telefoon', 'telefoon') !!}
                <small class="text-muted">Klant</small>
                {!! Form::text('telefoon', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('price', 'price') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('duur', 'ingeschatte duur ') !!}
                <small class="text-muted">(duur in uren)</small>
                {!! Form::number('duur', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
                {{--                {!! Form::select('status', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
                {{ Form::select('status', ['none' => 'none', 'ready' => 'ready', 'prograss' => 'prograss'], null, ['class' => 'form-control']) }}
            </div>

            {!! Form::submit('upload', ['class' => 'btn btn-primary pull-right'])!!}

        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('omschrijving', 'omschrijving') !!}
                <small class="text-muted">project</small>
                {!! Form::textarea('omschrijving', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('resultaat', 'resultaat') !!}
                <small class="text-muted">project</small>
                {!! Form::textarea('resultaat', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
        </div>


        <div class="col-md-4">

            <div class="form-group">
                {!! Form::label('users', 'users') !!}<br>
                <div class="row">
                    @foreach($users as $user)
                        <div class="col-lg-6" style="margin-bottom: 10px;">
                            {!! Form::checkbox('users[]', $user->id, Input::old('users')) !!}
                            {!! Form::label('users', $user->name) !!}
                            <br>
                            (
                            @foreach($user->userRole as $role)
                                <small>{{$role->role->status}},</small>
                            @endforeach
                            )
                        </div>
                    @endforeach
                </div>
                <hr class="col-lg-12">

            </div>

            <div class="form-group">
                {!! Form::label('roles', 'roles') !!}<br>
                <div class="row">

                    @foreach($roles as $role)
                        <div class="col-lg-4">
                            {!! Form::checkbox('roles[]', $role->id, Input::old('roles')) !!}
                            {!! Form::label('roles', $role->status) !!}<br>
                        </div>
                    @endforeach
                </div>
                <hr class="col-lg-12">
            </div>

            <div class="form-group">
                {!! Form::label('services', 'services') !!}<br>
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-lg-4">
                            {!! Form::checkbox('services[]', $service->id, Input::old('roles')) !!}
                            {!! Form::label('services', $service->name) !!}
                        </div>
                    @endforeach
                </div>
                <hr class="col-lg-12">
            </div>

            <div class="form-group">
                {!! Form::label('skills', 'skills') !!}<br>
                <div class="row">
                    @foreach($skills as $skill)
                        <div class="col-lg-4">
                            {!! Form::checkbox('skills[]', $skill->id, Input::old('skills')) !!}
                            {!! Form::label('skills', $skill->skill) !!}<br>
                        </div>
                    @endforeach
                </div>
                <hr class="col-lg-12">
            </div>
        </div>

    {!! Form::close() !!}

@endsection