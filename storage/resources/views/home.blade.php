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
        .triangle-down {
            width: 0;
            height: 0;
            border-left: 35px solid transparent;
            border-right: 35px solid transparent;
            border-top: 10px solid #1e61b7;
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
            <a href="{{ url('websites') }}">
                <div class="col-lg-4 text-center">
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/responsive.png" class="img-responsive center-block" style="height: 85%; width: 85%;" >
                    </div>
                    <h1>website</h1>
                </div>
            </a>
            <a href="{{ url('seo') }}">
                <div class="col-lg-4 text-center">
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/seo.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                    <h1>SEO</h1>
                </div>
            </a>
            <a href="{{ url('webshops') }}">
                <div class="col-lg-4 text-center">
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/shopping_cart.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                    <h1>webshop</h1>
                </div>
            </a>
        </div>
        <hr>
        <div class="row">
            <h2 class="text-center">Wat zoekt u?</h2>
            <p class="text-center">Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek.</p>
            <br>
            <div class="col-lg-4 thumbnail">
                Foto's
            </div>
            <div class="col-lg-4 thumbnail">
                Video's
            </div>
            <div class="col-lg-4 thumbnail">
                Logo's
            </div>
            <div class="col-lg-4 thumbnail">
                Hosting
            </div>
        </div>

    </div>

    <div class="row" style="background: #f4f4f4; margin-top: 50px; ">
        <div class="container" style="padding: 20px 0px 0px 0px">
            <div class="col-lg-6">
                <img class="img-responsive" src="http://johnpolacek.github.io/scrolldeck.js/decks/responsive/img/responsive_web_design.png">
            </div>
            <div class="col-lg-6">
                <h2 class="lead text-center">Responsive Website Mobile, Tablet en Computer</h2>
                <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row" style="background: #267AB7; height: 200px; border-bottom: 20px solid #1e61b7; margin-bottom: 20px">
            <div class="container">
                <h2 class="text-center " style="color: white !important; margin-top: 25px;"> Take a look at some of our work</h2>
                <div class="col-md-6 col-md-offset-3 ">
                    <p class="text-center" style="color: #fff;">n indruk te geven van het grafische effect van tekst op deze plek.
                        Wat u hier leest is een voorbeeldtekst. Deze wordt later
                        vervangen door de uiteindelijke</p>
                </div>
            </div>
        </div>

        <div class="triangle-down center-block" style="margin-top: -20px;"> </div>

        <div class="container" style="margin-top: 30px;">
            <div class="col-lg-3">
                <div class="col-ms-12" style="border: 1px solid rgba(0, 0, 0, 0.09); border-radius: 3px;">
                    <img class="img-responsive" style="margin: 5px;" src="http://www.routes4media.com/wp-content/uploads/2015/04/responsive_design_shop.png">
                </div>
                <span class="text-center">project website</span><br>
                <span class="text-center">www.google.com</span>
            </div>
        </div>
    </div>

    <div class="row" style="background-color:#0E0E0E; margin-top: 50px; padding: 20px 0px;">
        <div class="container">
            <h2 class="text-center" style="color: #fff !important;">Clients queto's</h2>
            <span class="muted center-text">John Doe</span>
            <i class="fa fa-quote-left" aria-hidden="true"></i>
            <div class="col-md-6 col-md-offset-3 ">
                <p class="text-center">n indruk te geven van het grafische effect van tekst op deze plek.
                    Wat u hier leest is een voorbeeldtekst. Deze wordt later
                    vervangen door de uiteindelijke</p>
            </div>
            <i class="fa fa-quote-right" aria-hidden="true"></i>
        </div>
    </div>

    <div class="row" style="background-color: #F2F2F2; margin-bottom: -50px; padding-bottom: 50px;">
        <div class="container">
            <h2 class="text-center" style="margin-top: 20px;">Our Team</h2><hr>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">
                    <br>
                    <span class="text-muted text-center">CEO</span><br>
                    <span>Jonh Doe</span>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">
                    <br>
                    <span class="text-muted text-center">Developer</span><br>
                    <span>Jonh Doe</span>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">
                    <br>
                    <span class="text-muted text-center">Lead developer</span><br>
                    <span>Jonh Doe</span>
                </div>
                <div class="col-md-3 text-center">
                    <img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">
                    <br>
                    <span class="text-muted text-center">Designer</span><br>
                    <span>Jonh Doe</span>
                </div>
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