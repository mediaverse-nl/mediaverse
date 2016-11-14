@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('sitemap')])

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>

@endsection

@section('js')

@stop
