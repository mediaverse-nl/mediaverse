<style>
    .panel-group .active {
        transition: all 0.5s ease;
        background-color: #0E0E0E;
    }
    .active a{
        color: white !important;
    }
    .panel-group .active:hover {
        background-color: #0E0E0E;
        /*opacity: 0.6;*/
    }
    .panel-group li:hover {
        background-color: #0E0E0E;
        /*opacity: 0.6;*/
    }
    .panel-group .panel{
        border-radius: 8px;
        overflow: hidden;
    }
    .list-group-item{
        background-color: #333;
        border: none;
    }
    .menu-bar > li{
        background: #333 !important;
        width: 100%;
    }
    .list-group-item > a{
        color: white !important;
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
    <div class="" style="margin-top: 25px;">
        {{--<h2>Bel ons</h2>--}}
        {{--<hr>--}}
        <p><b>@lang('button.offerte_aanvragen')</b> @lang('text.contact_us_through')</p>
        <a href="{{route('contact.create')}}" class="btn btn-primary">@lang('button.contact_us')</a>
        <hr>
    </div>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default" style="background-color: #0E0E0E; !important;" >
            {{--<div class="panel-heading accordion-heading">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#Websites">--}}
                        {{--<span class="accordion-toggle glyphicon-folder-close">--}}{{----}}{{--</span>--}}
                        {{--Websites--}}
                    {{--</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="Websites" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.websites'), route('page.laravel_websites'), route('page.hosting'), route('page.cms')]) ? 'in' : '' }}">--}}
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
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#internetmarketing">--}}
                    {{--<span class="glyphicon glyphicon-file"></span>--}}
                        {{--internetmarketing--}}
                    {{--</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="internetmarketing" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.internet_marketing'), route('page.vindbaarheid'), route('page.seo')]) ? 'in' : '' }}">--}}
                {{--<div class="list-group">--}}
                    <li class="list-group-item {{ route('page.internet_marketing') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.internet_marketing')}}"> Zoekmachine Optimalisatie</a>
                    </li>
                    {{--<li class="list-group-item {{ route('page.vindbaarheid') == Request::url() ? 'active' : null }}">--}}
                        {{--<a href="{{route('page.vindbaarheid')}}"> Vindbaar op Google</a>--}}
                    {{--</li>--}}
                    {{--<li class="list-group-item {{ route('page.seo') == Request::url() ? 'active' : null }}">--}}
                        {{--<a href="{{route('page.seo')}}"> SEO</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#webshops">--}}
                        {{--<span class="glyphicon glyphicon-file"></span>--}}
                        {{--webshops--}}
                    {{--</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="webshops" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.webshop'), route('page.onderhoud'), route('page.laravel_webshop')]) ? 'in' : '' }}">--}}
                {{--<div class="list-group">--}}
                    <li class="list-group-item {{ route('page.webshop') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.webshop')}}"> Webwinkel</a>
                    </li>
                    {{--<li class="list-group-item {{ route('page.laravel_webshop') == Request::url() ? 'active' : null }}">--}}
                        {{--<a href="{{route('page.laravel_webshop')}}"> Laravel Webwinkel</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#visueel">--}}
                        {{--<span class="glyphicon glyphicon-file"></span>--}}
                        {{--visueel--}}
                    {{--</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="visueel" class="panel-collapse collapse {{ in_array(Request::url(), [route('page.photography'), route('page.logo_illustratie'), route('page.design')]) ? 'in' : '' }}">--}}
                {{--<div class="list-group">--}}
                    <li class="list-group-item {{ route('page.onderhoud') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.onderhoud')}}"> Onderhoud</a>
                    </li>
                    <li class="list-group-item {{ route('page.photography') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.photography')}}"> Fotografie</a>
                    </li>
                    {{--<li class="list-group-item {{ route('page.logo_illustratie') == Request::url() ? 'active' : null }}">--}}
                        {{--<a href="{{route('page.logo_illustratie')}}"> Logo's & Illustraties</a>--}}
                    {{--</li>--}}
                    <li class="list-group-item {{ route('page.design') == Request::url() ? 'active' : null }}">
                        <a href="{{route('page.design')}}"> Design</a>
                    </li>
                {{--</div>--}}

        </div>

        <div class="" style="">
            {{--<h2>Bel ons</h2>--}}
            <hr>
            <p style="font-size: 18px;"><b>Bel ons op</b>:</p>
            <p style="font-size: 18px;" class=""><i class="fa fa-phone" aria-hidden="true"></i> +31 6 53 77 97 61</p>
            <hr>
        </div>

    </div>
</div>

