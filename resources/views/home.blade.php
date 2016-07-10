@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')

@section('keywords', 'ik ben een pagina met, blue, black, white keys')
{{--@section('keywords', 'ik ben een pagina met, blue, black, white keys')--}}

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <style>
        .slider-main{
            height: 800px;
            position: relative;
            opacity: 1;
        }
        .slider-main > div{
            height: 100%;
        }
        #image{
            object-fit: contain;
            width: 100%;
        }
        .slick-dots{
            position: absolute;
            display: inline !important;
            margin-top: -50px !important;
            z-index: 200;
            right: 50px;
        }
        .slick-dots > li{
            display: inline-block;

        }
        .slick-arrow {
            width:200px;
            display: inline-block;
            overflow: auto;
            white-space: nowrap;
            margin:0px auto;
            border:1px red solid;
            position: absolute;
            z-index: 100;
        }
        .slick-next {
            top: 40%;
            right: 0;
        }
        .slick-prev {
            top: 40%;
            left: 0;
        }
        .view {
            height: 700px;
        }
    </style>
@endsection

@section('content')

    <div class="slider-main">
        <div class="col-lg-12 view">
            <img id="image" src="/images/software-computer-code-1940x900_35196.jpg">
        </div>
        <div class="col-lg-12 view">
            <img id="image" src="/images/software-computer-code-1940x900_35196.jpg">
        </div>
        <div class="col-lg-12 view">
            <img id="image" src="/images/code-cleanup.png">
        </div>
    </div>

    {{--get all routes for text on pages--}}
    {{--@foreach (Route::getRoutes() as $value)--}}
        {{--{{$value->getName()}}<br>--}}
    {{--@endforeach--}}

    <div class="container">

        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="center-block" style="border-radius: 50%; background: #BADA55; width: 200px; height: 200px; overflow: hidden">
                    <a href="{{ url('websites') }}">Websites</a>
                    <img src="#">
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="center-block" style="border-radius: 50%; background: #BADA55; width: 200px; height: 200px; overflow: hidden">
                    <a href="{{ url('seo') }}">SEO</a>
                    <img src="#">
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="center-block" style="border-radius: 50%; background: #BADA55; width: 200px; height: 200px; overflow: hidden">
                    <a href="{{ url('webshops') }}">Webshops</a>
                    <img src="#">
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="container">
            <div class="col-lg-3">
                <h2>Responsive</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-lg-3">
                <h2>Reference</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-lg-3">
                <h2>Clients queto's</h2>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="col-lg-3">
                <h2>Team</h2>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script>
        $('.slider-main').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    </script>
@endsection