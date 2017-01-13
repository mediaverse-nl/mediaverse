@extends('layouts.admin')

@section('title', 'nieuw project')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    {!! Form::open(['route' => 'board.skill.store']) !!}

        <div class="col-md-6">

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('skill', 'skill') !!}
                {!! Form::text('skill', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            {!! Form::submit('aanmaken', ['class' => 'btn btn-primary pull-right'])!!}

        </div>

        <div class="col-md-6">

            <div class="form-group">
                {{--{!! Form::label('skills', 'skills') !!}<br>--}}
                {{--@foreach($skills as $skill)--}}
                    {{--{!! Form::checkbox('skills[]', $skill->id, Input::old('skills')) !!}--}}
                    {{--{!! Form::label('skills', $skill->skill) !!}<br>--}}
                {{--@endforeach--}}
            </div>
        </div>

    {!! Form::close() !!}

@endsection