@extends('layouts.admin')

@section('title', 'Projecten')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <a href="{{route('board.project.create')}}">Nieuw project</a>

@endsection