@extends('layouts.app')

@section('content')

    {{--{{dd($project)}}--}}

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referentie', $project)])

{{--{{ $project->name}}--}}
    {{--<div class="page-header">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--{!! Breadcrumbs::render('referenties') !!}--}}
                {{--<div class="col-lg-12">--}}
                    {{--<h1>referenties</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@stop

@push('css')
    <style>

    </style>
@endpush