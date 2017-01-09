@extends('layouts.admin')

@section('title', 'nieuw service')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    {!! Form::open(['route' => 'board.service.store']) !!}

        <div class="col-md-6">

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
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