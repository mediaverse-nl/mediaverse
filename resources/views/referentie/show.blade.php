@extends('layouts.app')

@section('title', trans('references.title.'.str_replace(' ', '-', $project->name)))
@section('description', $project->resultaat)
@section('keywords', trans('references.keywords.'.str_replace(' ', '-', $project->name)))

@push('meta-tags')

@endpush

@section('content')
    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referentie', $project)])

    <div class="container">
        <div class="row">

            <div class="slider-main col-lg-7">
                {{--<div class="col-lg-12">--}}
                @foreach($project->projectImage as $image)
                    <div>
                        <img src="/images/portfolio/{{$image->path}}" width="100%;">
                    </div>
                @endforeach
                {{--</div>--}}

            </div>

            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        @if($paginate['back'] != '')
                            <a href="{{route('referenties.show', str_replace('-', ' ', $paginate['back']->name))}}" class="btn btn-primary pull-left t-btn"><i class="fa fa-backward" aria-hidden="true"></i> Volgende</a>
                        @else
                            <a class="btn btn-primary pull-left t-btn" disabled=""><i class="fa fa-backward" aria-hidden="true"></i> Volgende</a>
                        @endif
                        @if($paginate['forward'] != '')
                            <a href="{{route('referenties.show', str_replace(' ', '-', $paginate['forward']->name))}}" class="btn btn-primary pull-right t-btn">Vorige <i class="fa fa-forward" aria-hidden="true"></i></a>
                        @else
                            <a class="btn btn-primary pull-right t-btn" disabled=""><i class="fa fa-forward" aria-hidden="true"></i> Vorige</a>
                        @endif
                    </div>
                </div>

                <h1 style="color: #267AB7; ">Project: {{$project->name}}</h1>
                <hr>
                {{--<label class="text-muted">verleende diensten:</label>--}}
                <small>
                    @foreach($project->projectService as $service)
                        <span class="badge" style="margin-right: 5px; background-color: #0E0E0E;">{{($service->service->name)}}</span>
                    @endforeach
                </small>
                <br>
                <br>

                <label>Resultaat:</label>
                <br>
                <p>{{$project->resultaat}}</p>
                <br>

                <p><a href="{{$project->website}}">{{$project->website}}</a></p>

            </div>

        </div>
        <br>
        <hr>
    </div>



@stop

@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider-main').slick({
                dots: true,
                autoplay: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
    //            variableWidth: true,
//                prevArrow:"<div class='prev'></div>",
//                nextArrow:"<div class='next'></div>",
            });
        });

    </script>
@endpush

@push('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>

    <style>
        .slick-slide {outline: none;}
        .t-btn{
            width: 100px !important;
            border-radius: 20px;
        }
        .t-btn > .fa{
            color: #fff !important;
            background-color: #267AB7;
        }
    </style>
@endpush