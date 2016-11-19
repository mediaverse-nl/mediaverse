@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('seo')])

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1>Diensten</h1>

                <div class="row">
                    <div class="col-lg-6" style="border-right: 1px solid #e7e7e7;">
                        <div class="col-lg-2">
                            <i class="fa fa-search fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">diensten</h2>
                            <p>uiasdhn afiunhafianbfqaiofnafo a</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-search fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">diensten</h2>
                            <p>uiasdhn afiunhafianbfqaiofnafo a</p>
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
                            <h2 style="margin-bottom: 0px;">diensten</h2>
                            <p>uiasdhn afiunhafianbfqaiofnafo a</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-2">
                            <i class="fa fa-search fa-5x" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10">
                            <h2 style="margin-bottom: 0px;">diensten</h2>
                            <p>uiasdhn afiunhafianbfqaiofnafo a</p>
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