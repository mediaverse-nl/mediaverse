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
    <div class="panel">
        <ul class="nav navbar-nav menu-bar">
            {{--<li class="{{ Request::url() == route('admin.index') ? 'active' : '' }}"><a href="{{route('admin.index')}}">home</a></li>--}}
            {{--<li class="{{ Request::url() == route('admin.reference.index') ? 'active' : '' }}"><a href="{{route('admin.reference.index')}}">references</a></li>--}}
        </ul>
    </div>
    <div class="panel panel-default thumbnail" style="background: #F4F4F4;">
        <span class="lead"><i class="fa fa-phone" aria-hidden="true"></i> +31 6 53 77 97 61</span>
        <a href="{{route('contact.create')}}" class="btn btn-primary">Neem contact op</a>
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
            <div id="Websites" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.websites'), route('page.laravel_websites'), route('page.hosting'), route('page.cms')]) ? 'in' : '' }}">
                <ul class="list-group">
                    <li class="list-group-item {{ route('page.websites') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.websites')}}"> Website</a>
                    </li>
                    <li class="list-group-item {{ route('page.laravel_websites') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.laravel_websites')}}"> Laravel Website</a>
                    </li>
                    <li class="list-group-item {{ route('page.cms') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.cms')}}"> Content Management</a>
                    </li>
                    <li class="list-group-item {{ route('page.hosting') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.hosting')}}"> Hosting en Service</a>
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
            <div id="internetmarketing" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.internet_marketing'), route('page.vindbaarheid'), route('page.seo')]) ? 'in' : '' }}">
                <div class="list-group">
                    <li class="list-group-item {{ route('page.internet_marketing') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.internet_marketing')}}"> Zoekmachine Optimalisatie</a>
                    </li>
                    <li class="list-group-item {{ route('page.vindbaarheid') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.vindbaarheid')}}"> Vindbaar op Google</a>
                    </li>
                    <li class="list-group-item {{ route('page.seo') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.seo')}}"> SEO</a>
                    </li>
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
            <div id="webshops" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.webshop'), route('page.onderhoud'), route('page.laravel_webshop')]) ? 'in' : '' }}">
                <div class="list-group">
                    <li class="list-group-item {{ route('page.webshop') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.webshop')}}"> Webwinkel</a>
                    </li>
                    {{--<li class="list-group-item {{ route('page.laravel_webshop') == Request::url() ? 'active' : null }}">--}}
                        {{--<a href="{{route('page.laravel_webshop')}}"> Laravel Webwinkel</a>--}}
                    {{--</li>--}}
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
            <div id="visueel" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.photography'), route('page.logo_illustratie'), route('page.design')]) ? 'in' : '' }}">
                <div class="list-group">
                    <li class="list-group-item {{ route('page.photography') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.photography')}}"> Fotografie</a>
                    </li>
                    <li class="list-group-item {{ route('page.logo_illustratie') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.logo_illustratie')}}"> Logo's & Illustraties</a>
                    </li>
                    <li class="list-group-item {{ route('page.design') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.design')}}"> Design</a>
                    </li>
                </div>
            </div>
        </div>

    </div>
</div>

