@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')
@section('keywords', 'ik ben een pagina met, blue, black, white keys')

@push('meta-tags')
    <meta name="google-site-verification" content="eN2ZhbgwWLU3wuEhlogHC2uuYJlk08uzhqjqF4zE7x4" />
@endpush

@section('content')

    <div class="container-fluid">
        <div class="slider-main row">
            <div class="col-lg-12">
                <div class="row view one-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>Webshop nodig?</b></h1>
                <p class="text-center">n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels <br>
                    in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>
            <div class="col-lg-12">
                <div class="row view two-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>website nodig?</b></h1>
                <p class="text-center">n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. <br>
                    het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>
            <div class="col-lg-12">
                <div class="row view three-img"></div>
                <h1 class="text-center" style="text-align: center;"><b>Oplossing nodig?</b></h1>
                <p class="text-center">n tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum <br>
                    niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud.</p>
            </div>

        </div>

    </div>

    <div class="container" style="margin-top: -70px">

        <div class="row">
            <a href="{{route('page.websites')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>website</h1>
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/responsive.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                </div>
            </a>
            <a href="{{route('page.seo')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>SEO</h1>
                    <div class="center-block" style="border-radius: 50%; background: #F4F4F4; width: 200px; height: 200px; overflow: hidden">
                        <br>
                        <img src="/images/icons/seo.png" class="img-responsive center-block" style="height: 85%; width: 85%;">
                    </div>
                </div>
            </a>
            <a href="{{route('page.webshop')}}">
                <div class="col-lg-4 text-center main-service animated">
                    <h1>webshop</h1>

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
            <h3 class="text-center">Welke dienst zoekt u?</h3>
            <p class="text-center">Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek.</p>
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
        </div>

    </div>

    <div class="container-fluid" style="background: #f4f4f4; margin-top: 50px; ">
        <div class="container" style="padding: 20px 0px 0px 0px">
            <div id="slider-left" class="col-lg-6 animated">
                <img class="img-responsive" src="http://johnpolacek.github.io/scrolldeck.js/decks/responsive/img/responsive_web_design.png">
            </div>
            <div id="slider-right" class="col-lg-6 animated">
                <h2 class="lead text-center">Responsive Website Mobile, Tablet en Computer</h2>
                <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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

    {{--<div class="container-fluid" style="background-color:#0E0E0E; margin-top: 0px; padding: 0px 0px;">--}}
        {{--<div class="container">--}}
            {{--<h2 class="text-center" style="color: #fff !important;">Clients queto's</h2>--}}
            {{--<span class="muted center-text">John Doe</span>--}}
            {{--<i class="fa fa-quote-left" aria-hidden="true"></i>--}}
            {{--<div class="col-md-6 col-md-offset-3 ">--}}
                {{--<p class="text-center">--}}
                    {{--n indruk te geven van het grafische effect van tekst op deze plek.--}}
                    {{--Wat u hier leest is een voorbeeldtekst. Deze wordt later vervangen door de uiteindelijke--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<i class="fa fa-quote-right" aria-hidden="true"></i>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="container-fluid" style="background-color: #F2F2F2; margin-bottom: -50px; padding-bottom: 50px;">--}}
        {{--<div class="container">--}}
            {{--<h2 class="text-center" style="margin-top: 20px;">Our Team</h2><hr>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 text-center">--}}
                    {{--<img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">--}}
                    {{--<br>--}}
                    {{--<span class="text-muted text-center">CEO</span><br>--}}
                    {{--<span>Jonh Doe</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 text-center">--}}
                    {{--<img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">--}}
                    {{--<br>--}}
                    {{--<span class="text-muted text-center">Developer</span><br>--}}
                    {{--<span>Jonh Doe</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 text-center">--}}
                    {{--<img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">--}}
                    {{--<br>--}}
                    {{--<span class="text-muted text-center">Lead developer</span><br>--}}
                    {{--<span>Jonh Doe</span>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 text-center">--}}
                    {{--<img class="img-circle img-responsive center-block" src="/images/users/default-avatar.gif">--}}
                    {{--<br>--}}
                    {{--<span class="text-muted text-center">Designer</span><br>--}}
                    {{--<span>Jonh Doe</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection


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