@extends('layouts.admin')

@section('title', 'Mijn profiel')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-lg-8">

        {!! Form::model($user, array('route' => 'profile.update', 'method' => 'patch', 'files' => 'true')) !!}

        <div class="col-md-6">
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
                {!! Form::label('hourly_wage', 'hourly_wage') !!}
                {!! Form::text('hourly_wage', null, ['class' => 'form-control', 'placeholder' => '', 'disabled']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('bank_id', 'bank_id') !!}
                {!! Form::text('bank_id', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

        </div>

        <div class="col-md-6">
            <label class="control-label">Profile foto</label>
            <br>

            <div style="height: 150px; height: 150px;" class="thumbnail">
                <img class="img-circle" style="height: 100%; width: 140px;" src="\images\profile\{{$user->profile_image}}">
            </div>
            <label class="control-label">Select File</label>
            {!! Form::file('profile_image', array('multiple' => true, 'data-show-caption' => 'true', 'data-show-upload' => 'false')) !!}
            <hr class="col-lg-12">


            {{--<div class="col-lg-4">--}}
                <label>Vaardigheden:</label>

                <div class="form-group col-lg-12">
                    {{--{!! Form::label('skill', 'skills') !!}<br>--}}
                    <div class="row">
                        @foreach($skills as $skill)
                            <div class="col-lg-4">
                                {!! Form::checkbox('skills[]', $skill->id, in_array($skill->id, collect($user->userSkill->lists('skill_id'))->toArray())) !!}
                                {!! Form::label('skills', $skill->skill) !!}
                            </div>
                        @endforeach
                    </div>
                    <hr class="col-lg-12">
                </div>
            {{--</div>--}}

            {{--<a href="{{route('board.project.create')}}">nieuw skill</a>--}}

            <hr>


        </div>

        {!! Form::close() !!}

    </div>

    <div class="col-lg-2">

        {{--<a class="btn btn-default" href="{{route('board.user.create')}}">nieuwe user</a>--}}

    </div>


@endsection