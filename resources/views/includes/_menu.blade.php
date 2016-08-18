<style>
    .active > a{
        background-color: #267AB7;
    }
    .active a{
        color: white !important;
    }
    .active:hover a{
        background-color: #0E0E0E !important;
    }
    .menu-bar > li{
        background: #B0BEC5;
        width: 100%;
    }
    .accordion-toggle:after {
        font-family: 'FontAwesome';
        content: "\f078";
        float: right;
    }
    .accordion-opened .accordion-toggle:after {
        content: "\f054";
    }
</style>

<div class="col-lg-3">
    {{--<div class="panel">--}}
        {{--<ul class="nav navbar-nav menu-bar">--}}
            {{--<li class="{{ Request::url() == route('admin.index') ? 'active' : '' }}"><a href="{{route('admin.index')}}">home</a></li>--}}
            {{--<li class="{{ Request::url() == route('admin.reference.index') ? 'active' : '' }}"><a href="{{route('admin.reference.index')}}">references</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    <div class="panel panel-default thumbnail" style="background: #F4F4F4;">
        <span class="lead"><i class="fa fa-phone" aria-hidden="true"></i> +31 6 53 77 97 61</span>
        <a href="" class="btn btn-primary">Neem contact op</a>
    </div>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading accordion-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#Websites">
                        {{--<span class="accordion-toggle glyphicon-folder-close">--}}{{--</span>--}}
                        Websites
                    </a>
                </h4>
            </div>
            <div id="Websites" class="panel-collapse collapse in">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/">> Laravel Website</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/">> Hosting en Service</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#internetmarketing">
                    {{--<span class="glyphicon glyphicon-file"></span>--}}
                        internetmarketing
                    </a>
                </h4>
            </div>
            <div id="internetmarketing" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="#" class="list-group-item active"></a>
                    {{--<a href="#" class="list-group-item"></a>--}}
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#webshops">
                        {{--<span class="glyphicon glyphicon-file"></span>--}}
                        webshops
                    </a>
                </h4>
            </div>
            <div id="webshops" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="#" class="list-group-item">Laravel Webshop</a>
                    <a href="#" class="list-group-item">Webshops</a>
                    <a href="#" class="list-group-item"></a>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#visueel">
                        {{--<span class="glyphicon glyphicon-file"></span>--}}
                        visueel
                    </a>
                </h4>
            </div>
            <div id="visueel" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="#" class="list-group-item">Fotografie</a>
                    <a href="#" class="list-group-item">Logo's & Illustraties</a>
                    <a href="#" class="list-group-item">Design</a>
                </div>
            </div>
        </div>

    </div>
</div>

