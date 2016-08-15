@extends('layouts.app')

@section('content')

    {{--@include('includes._breadcrumbs')--}}
    {{--@section('breadcrumbs', Breadcrumbs::render('referenties'))--}}

    <div class="page-header">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('referenties') !!}
                <div class="col-lg-12">
                    <h1>referenties</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection

@section('js')

@stop
