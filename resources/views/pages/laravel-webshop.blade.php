@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('laravel-webshop')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Laravel Webwinkel</h1>

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