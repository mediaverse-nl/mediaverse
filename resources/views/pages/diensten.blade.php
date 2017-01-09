@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('services')])

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1>@lang('text.services')</h1>
                <p>@lang('text.services_description')</p>
                <br>

                <div class="row">
                    <div class="col-lg-6" style="border-right: 1px solid #e7e7e7;">
                        <div class="col-lg-2">
                            <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.website.title')</h2>
                            <p>@lang('services.website.description')</p>
                            <a href="{{route('page.websites')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.cms.title')</h2>
                            <p>@lang('services.cms.description')</p>
                            <a href="{{route('page.cms')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                </div>
                <hr style="border-bottom: 1px solid #e7e7e7;">

                <div class="row">
                    <div class="col-lg-6" style="border-right: 1px solid #e7e7e7;">
                        <div class="col-lg-2">
                            <i class="fa fa-server fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.hosting.title')</h2>
                            <p>@lang('services.hosting.description')</p>
                            <a href="{{route('page.hosting')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-shopping-cart fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.webshop.title')</h2>
                            <p>@lang('services.webshop.description')</p>
                            <a href="{{route('page.webshop')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                </div>
                <hr style="border-bottom: 1px solid #e7e7e7;">

                <div class="row">
                    <div class="col-lg-6" style="border-right: 1px solid #e7e7e7;">
                        <div class="col-lg-2">
                            <i class="fa fa-search fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.seo.title')</h2>
                            <p>@lang('services.seo.description')</p>
                            <a href="{{route('page.seo')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.onderhoud.title')</h2>
                            <p>@lang('services.onderhoud.description')</p>
                            <a href="{{route('page.onderhoud')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                </div>
                <hr style="border-bottom: 1px solid #e7e7e7;">

                <div class="row">
                    <div class="col-lg-6" style="border-right: 1px solid #e7e7e7;">
                        <div class="col-lg-2">
                            <i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.photography.title')</h2>
                            <p>@lang('services.photography.description')</p>
                            <a href="{{route('page.photography')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-eye fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">@lang('services.design.title')</h2>
                            <p>@lang('services.design.description')</p>
                            <a href="{{route('page.design')}}" class="pull-right btn btn-default">@lang('button.view')</a>
                        </div>
                    </div>
                </div>
                <hr style="border-bottom: 1px solid #e7e7e7;">

            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush