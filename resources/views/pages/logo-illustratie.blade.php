@extends('layouts.app')

@section('title', trans('page.logo-illustratie.title'))
@section('description', trans('page.logo-illustratie.description'))
@section('keywords', trans('page.logo-illustratie.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('logo-illustraties')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Logo's en Illustraties</h1>

            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush