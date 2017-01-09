@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('privacy')])

    <div class="container">
        <div class="row">

        </div>
    </div>
@stop
