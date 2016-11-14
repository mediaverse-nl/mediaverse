@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('privacy')])

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">


                        <div class="col-lg-3">Websites</div>
                        <div class="col-lg-3">SEO</div>
                        <div class="col-lg-3">Webshops</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
