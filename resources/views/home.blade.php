@extends('layouts.app')

@section('title', trans('page.home.title'))
@section('description', trans('page.home.description'))
@section('keywords', trans('page.home.keywords'))

@push('meta-tags')
    <meta name="google-site-verification" content="eN2ZhbgwWLU3wuEhlogHC2uuYJlk08uzhqjqF4zE7x4" />
@endpush

@section('content')

    <div class="container-fluid">
        <div class="slider-main row">
            <div class="col-lg-12">
                <div class="row view one-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>@lang('banner.title_1') Webshop nodig?</b></h1>
                <p class="text-center">@lang('banner.text_1') n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels <br>
                    in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>
            <div class="col-lg-12">
                <div class="row view two-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>@lang('banner.title_2') website nodig?</b></h1>
                <p class="text-center">@lang('banner.text_2') n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. <br>
                    het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>
            <div class="col-lg-12">
                <div class="row view three-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>@lang('banner.title_3') Oplossing nodig?</b></h1>
                <p class="text-center">@lang('banner.text_3') n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum <br>
                    niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>

        </div>

    </div>

    <div class="container" style="margin-top: -70px">

        <div class="row">
            <a href="{{route('page.websites')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>@lang('services.website.title')</h1>
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/responsive.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                </div>
            </a>
            <a href="{{route('page.seo')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>@lang('services.seo.title')</h1>
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/seo.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                </div>
            </a>
            <a href="{{route('page.webshop')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>@lang('services.webshop.title')</h1>

                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/shopping_cart.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                </div>
            </a>
        </div>
        <br>

        <hr>

        <div class="container-fluid services animated">
            <h3 class="text-center">@lang('text.services_title') Welke dienst zoekt u?</h3>
            <p class="text-center">@lang('text.services_text')Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek.</p>
            <br>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-camera-retro" aria-hidden="true"></i>
                    Fotografie
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-server" aria-hidden="true"></i>
                    Hosting
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Content management
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    Vindbaar op google
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-font" aria-hidden="true"></i>
                    Teksten voor uw site
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    Logo's / illustraties
                </div>
            </div>
            <div class="col-lg-12">
                <hr>
                <a class="btn btn-default center-block" style="width: 250px;">Bekijk al onze diensten</a>

            </div>
        </div>

    </div>

    <div class="container-fluid" style="background: #f4f4f4; margin-top: 50px; ">
        <div class="container" style="padding: 20px 0px 0px 0px">
            <div id="slider-left" class="col-lg-6 animated">
                <img class="img-responsive" src="http://johnpolacek.github.io/scrolldeck.js/decks/responsive/img/responsive_web_design.png">
            </div>
            <div id="slider-right" class="col-lg-6 animated">
                <h2 class="lead text-center">@lang('text.responsive_title') Responsive Website Mobile, Tablet en Computer</h2>
                <p class="lead text-center">@lang('text.responsive_text') Uw site overal en altijd berijkbaar.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" style="background: #267AB7; height: 200px; border-bottom: 20px solid #1e61b7; margin-bottom: 20px">
            <div class="container">
                <h2 class="text-center " style="color: white !important; margin-top: 25px;">@lang('text.our_work_title') Take a look at some of our work</h2>
                <div class="col-md-6 col-md-offset-3 ">
                    <p class="text-center" style="color: #fff;">@lang('text.our_work_text')n indruk te geven van het grafische effect van tekst op deze plek.
                        Wat u hier leest is een voorbeeldtekst. Deze wordt later
                        vervangen door de uiteindelijke</p>
                </div>
            </div>
        </div>

        <div class="triangle-down center-block" style="margin-top: -20px;"> </div>

        <div class="container" style="margin-top: 30px;">

            @foreach($portfolio as $item)
                <div class="col-lg-3">
                    <div class="panel panel-default" style="border-radius: 0px; padding: 3px; background-color: #F4F4F4">
                        <a href="{{route('referenties.show', $item->name)}}">
                            <div class="col-ms-12" style="border: 1px solid rgba(0, 0, 0, 0.09); border-radius: 0px; padding: 3px;">
                                <img class="img-responsive" style="height: 120px;" src="/images/portfolio/{{$item->projectImage->first()->path}}">
                            </div>
                            <h2 class="" style="margin: 0px 15px 0px 0px !important; color: #267AB7 !important;">{{$item->name}}</h2>
                            <small style="color: #0E0E0E">
                                @foreach($item->projectService as $task)
                                    {{$task->service->name}}
                                @endforeach
                            </small>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@stop


@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js"></script>

    <script>
        $('.slider-main').slick({
            focusOnSelect: false,
            infinite: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
//            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
//            variableWidth: true,
            prevArrow:"<div class='prev'></div>",
            nextArrow:"<div class='next'></div>",
        });

        //http://daneden.github.io/animate.css/
        $("#slider-left").waypoint(function() {
            $('#slider-left').addClass('bounceInLeft');
        },{ offset: '100%' });

        $("#slider-right").waypoint(function() {
            $('#slider-right').addClass('bounceIn');
        },{ offset: '100%' });

        $(".main-service").waypoint(function() {
            $('.main-service').addClass('bounceIn');
        },{ offset: '100%' });

        $(".services").waypoint(function() {
            $('.services').addClass('fadeInUp');
        },{ offset: '100%' });

    </script>
@endpush

@push('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

    <style>

    #slider-left {
        -webkit-animation-duration: 0.8s;
        -webkit-animation-delay: 0.2s;
        -webkit-animation-iteration-count: 1;
    }

    #slider-right {
        -webkit-animation-duration: 0.8s;
        -webkit-animation-delay: 0.6s;
        -webkit-animation-iteration-count: 1;
    }

    .slider-main{
        height: 800px;
        position: relative;
        opacity: 1;
    }
    .slider-main > div{
        height: 100%;
    }
    /*#image{*/
    /*object-fit: contain;*/
    /*width: 100%;*/
    /*}*/
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
        /*width:200px;*/
        display: inline-block;
        /*overflow: auto;*/
        white-space: nowrap;
        margin:0px auto;
        position: absolute;
        z-index: 100;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
    }
    /*.slick-arrow::selection { background: transparent; }*/
    .next {
        height: 120px !important;
        top: 35%;
        right: 0;
        z-index: 100;
        border-top: 60px solid transparent;
        border-bottom: 60px solid transparent;
        border-left: 60px solid rgba(38, 122, 183, 0.2);
    }
    .prev {
        height: 120px !important;
        top: 35%;
        left: 0;
        z-index: 100;
        border-top: 60px solid transparent;
        border-bottom: 60px solid transparent;
        border-right: 60px solid rgba(38, 122, 183, 0.2);
    }

    .view {
        height: 700px !important;
        padding: 0px;
        position: relative;
        background: #000000;
        overflow: hidden;
    }
    .slider-main h1{
        top: 230px;
        min-height: 80px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 2;
        color: #267AB7;
    }
    .slider-main p{
        top: 300px;
        min-height: 80px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 2;
        color: #F4F4F4;
    }
    .slide {
        position: relative;
    }
    .view:before{
        content: ' ';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0.3;
        background-repeat: no-repeat;
        background-position: 50% 0;
        -ms-background-size: cover;
        -o-background-size: cover;
        -moz-background-size: cover;
        -webkit-background-size: cover;
        background-size: cover;
    }
    .one-img:before{
        background-image: url('/images/software-computer-code-1940x900_35196.jpg');
    }
    .two-img:before{
        background-image: url('/images/software-computer-code-1940x900_35196.jpg');
    }
    .three-img:before{
        background-image: url('/images/code-cleanup.png');
    }
    .triangle-down {
        width: 0;
        height: 0;
        border-left: 35px solid transparent;
        border-right: 35px solid transparent;
        border-top: 10px solid #1e61b7;
    }

</style>
@endpush