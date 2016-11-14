@extends('layouts.admin')

@section('title', 'Dashboard > pages > create')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="row">

        @include('errors.message')


        {!! Form::open(array('route' => 'admin.pages.store', 'class' => 'form col-md-3')) !!}

        <div class="form-group">
            {!! Form::label('Title') !!}
            {!! Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Your name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description', null, array('class'=>'form-control', 'placeholder'=>'max 160 karakters')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('keywords') !!}
            {!! Form::textarea('keywords', null, array('class'=>'form-control', 'placeholder'=>'na elke key "één commá" (baby, baby schoenen, baby bad)')) !!}
        </div>

        {!! Form::label('Page') !!}
        <select class="form-control" name="page">
            @foreach (array_diff($routes, $pages) as $value)
                <option value="{{$value}}">{{$value}}</option>
            @endforeach
        </select>
        {{--{{Form::select('size', array(Route::getRoutes()->getPath()))}}--}}

        <br>
        <div class="form-group">
            {!! Form::submit('create', array('class'=>'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <!-- /.row -->

@stop