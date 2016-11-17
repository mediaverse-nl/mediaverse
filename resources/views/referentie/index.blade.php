@extends('layouts.app')

{{--@section('title', $seo ? $seo->title : '' )--}}
{{--@section('description', $seo ? $seo->description : '')--}}
{{--@section('keywords',  $seo ? $seo->keywords : '')--}}

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('sitemap')])

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach($project as $p)
                    <div class="col-md-3 project-ref">
                        <a href="{{route('referenties.show', $p->name)}}">
                            <div class="image-con">
                                <img src="">
                            </div>
                            <h1>{{$p->name}}</h1>
                            <span>diensten</span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush

@push('css')
    <style>
        .project-ref{
            height: 300px;
            border: 1px solid gray;
        }
        .image-con{

        }
        .image-con > img{
           height: 140px;
            background: #000;
        }
    </style>
@endpush
