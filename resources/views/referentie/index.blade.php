@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('seo')])

    <div class="container">
        <div class="row">

            <div class="">

            </div>

            <div>

            </div>
            @foreach($project as $item)
                <div class="col-lg-3">
                    <a href="{{route('referenties.show', $item->name)}}">
                        <div class="thumbnail">
                            <div class="">
                                <img src="">
                            </div>
                            <h1>{{$item->name}}</h1>
                            <p></p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@stop

@push('scripts')

@endpush

@push('css')

@endpush