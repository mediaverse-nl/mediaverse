@extends('layouts.admin')

@section('title', 'User aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')
    {!! Form::model($user, array('route' => 'board.user.update', 'method' => 'patch', 'files' => 'true')) !!}

    <div class="col-md-4">
        {!! Form::hidden('id', $user->id) !!}
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('name', 'name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '', 'disabled']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address', 'address') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('postcode', 'postcode') !!}
            {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('hourly_wage', 'Salaris') !!}
            {!! Form::text('hourly_wage', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bank_id', 'IBAN') !!}
            {!! Form::text('bank_id', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefoon', 'telefoon nr') !!}
            {!! Form::text('telefoon', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        {{--<div class="form-group">--}}
            {{--{!! Form::label('id', 'bank_id') !!}--}}
            {{--{!! Form::text('bank_id', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
        {{--</div>--}}

        {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

    </div>

    <div class="col-md-4">

        <div class="form-group col-lg-12">
            <hr>
            {!! Form::label('roles', 'roles') !!}<br>
            @foreach($roles as $role)
                {!! Form::checkbox('roles[]', $role->id, in_array($role->id, collect($user->userRole->lists('role_id'))->toArray())) !!}
                {!! Form::label('roles', $role->status) !!}<br>
            @endforeach
            {{--<br>--}}
            <small class="text-muted">Gebruikers rechten</small>
            <hr class="">
        </div>

        <hr>

        <div class="form-group col-lg-12">
            {!! Form::label('skill', 'Vaardigheden') !!}<br>
            <div class="row">
                @foreach($skills as $skill)
                    <div class="col-lg-4">
                        {!! Form::checkbox('skills[]', $skill->id, in_array($skill->id, collect($user->userSkill->lists('skill_id'))->toArray())) !!}
                        {!! Form::label('skills', $skill->skill) !!}
                    </div>
                @endforeach
            </div>
            <hr>
        </div>

    </div>

    <div class="col-lg-4">
        <label class="control-label">Profile foto</label>
        <br>

        <div style="height: 150px; height: 150px;" class="thumbnail">
            <img class="img-circle" style="height: 100%; width: 140px;" src="\images\profile\{{$user->profile_image}}">
        </div>
        <label class="control-label">Select File</label>
        {!! Form::file('profile_image', array('multiple' => true, 'data-show-caption' => 'true', 'data-show-upload' => 'false')) !!}
        <hr>
    </div>

    {!! Form::close() !!}

@endsection