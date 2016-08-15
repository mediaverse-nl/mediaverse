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
    <div class="panel panel-default">
        <span class="text-muted lead"> Tel: 06 53 77 97 61</span>
        <a href="" class="btn btn-primary">Neem contact op</a>
    </div>
    <div class="panel-group" id="accordion">
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading accordion-heading">--}}
                {{--<h4 class="panel-title">--}}
                    {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="accordion-toggle glyphicon glyphicon-folder-close">--}}
                {{--</span>Websites</a>--}}
                {{--</h4>--}}
            {{--</div>--}}
            {{--<div id="collapseOne" class="panel-collapse collapse in">--}}
                {{--<ul class="list-group">--}}
                    {{--<li class="list-group-item"><span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://fb.com/moinakbarali">Articles</a></li>--}}

                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">sd
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                </span>Reports</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>

    </div>
</div>

