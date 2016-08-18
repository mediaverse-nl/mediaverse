@extends('layouts.app')

@section('title', 'apple 1')
@section('description', 'apple met gele kleur')
@section('keywords', 'apple, kleur')

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referenties')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>title pagina</h1>

                <b>kop </b>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                </p>
            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush