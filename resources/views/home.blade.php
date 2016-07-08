@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')

@section('keywords', 'ik ben een pagina met, blue, black, white keys')
{{--@section('keywords', 'ik ben een pagina met, blue, black, white keys')--}}

@section('content')

    <div class="slider-main">
        <div><a>asdsad 1</a></div>
    </div>

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

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <style>
        .slider-main{
            height: 900px;
            width: 100%;
            background-image: url("/images/software-computer-code-1940x900_35196.jpg");
            opacity: 9;

            /*background-color: rgba(0, 0, 0, 0);*/
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
@endsection

@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
@endsection