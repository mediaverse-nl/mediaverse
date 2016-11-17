<div class="banner" style="height: 300px; width: 100%; overflow: hidden">
    <style>
        .banner {
            /*width: 100%;*/
            /*height: 100%;*/
            display: block;
            position: relative;
            background: #000000;
            /*background: url(images/code-cleanup.png);*/
            /*background: url(images/xdcms.jpg);*/
        }
        /*.banner:after {*/
            /*!*content: "";*!*/
            /*!*background-image: url(images/grid.png);*!*/
            /*!*background-size: 150px 150px;*!*/
            /*!*display: inline-block;*!*/
            /*!*!*width: 50px;*!*!*/
            /*!*!*height: 60px;*!*!*/
            /*!*top: 0;*!*/
            /*!*left: 0;*!*/
            /*!*bottom: 0;*!*/
            /*!*right: 0;*!*/
            /*!*position: absolute;*!*/
            /*!*opacity: 1;*!*/
        /*}*/

        .banner:before{
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
        .banner:before{
            background-image: url('/images/code-cleanup.png');
        }
    </style>
    {{--<img class="img-responsive" src="/images/code-cleanup.png" width="100%">--}}
</div>

<div class="page-header" style=" margin: 0px; height: 40px; z-index: 999;">
    <div class="container" style="">
        <div class="row" style="margin-top: -21px;">
            {!! $breadcrumbs !!}
            <div class="col-md-12">
                <hr style="margin-top: -20px; padding: 0px 40px;">
            </div>

        </div>
    </div>
</div>