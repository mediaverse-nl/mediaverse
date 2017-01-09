<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('dashboard')}}">Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>{{ Auth::user()->name }}</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
{{--                    <a href="{{route('home')}}"><i class="fa fa-fw fa-envelope"></i> website</a>--}}
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li>
                <a href="{{route('board.service.index')}}">Services</a>
            </li>
            <li>
                <a href="{{route('board.role.index')}}">Roles</a>
            </li>
            <li>
                <a href="{{route('board.skill.index')}}">Skills</a>
            </li>
            <li>
                <a href="{{route('board.user.index')}}">Users</a>
            </li>
            <li>
                <a href="{{route('board.project.index')}}">Project</a>
            </li>

            @if(Auth::user()->hasRole('board'))
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#board" class="collapsed" aria-expanded="false">
                        <i class="fa fa-fw fa-arrows-v"></i> Board <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="board" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> dashboard</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('board.project.index')}}"><i class="fa fa-fw fa-bars"></i> projects</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('board.skill.index')}}"><i class="fa fa-fw fa-bars"></i> skills</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> users</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> Pages <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">privacy policy</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">cookie policy</a>
                        </li>
                        <li>
                            <a href="#"> Support</a>
                        </li>
                        <li>
                            <a href="#"> FAQ</a>
                        </li>
                        <li>
                            <a href="#"> contact</a>
                        </li>
                    </ul>
                </li>

            @endif

            @if(Auth::user()->hasRole('developer'))
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#developer" class="collapsed" aria-expanded="false">
                        <i class="fa fa-fw fa-arrows-v"></i> Developer <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="developer" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> dashboard</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('developer.project.index')}}"><i class="fa fa-fw fa-bars"></i> project</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> skill</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(Auth::user()->hasRole('marketing'))
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#board" class="collapsed" aria-expanded="false">
                        <i class="fa fa-fw fa-arrows-v"></i> Board <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="board" class="collapse" aria-expanded="false" style="height: 0px;">
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> dashboard</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> project</a>
                        </li>
                        <li class="{{ Request::is('admin/categories*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-bars"></i> skill</a>
                        </li>
                    </ul>
                </li>
            @endif


            {{--<li class="{{ Request::is('admin/orders*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_orders_all')}}"><i class="fa fa-fw fa-shopping-cart"></i> Orders</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('admin/videos*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_videos_all')}}"><i class="fa fa-fw fa-film"></i> Videos</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('admin/users*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_profile_all')}}"><i class="fa fa-fw fa-user"></i> Users</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('admin/author*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_authors_all')}}"><i class="fa fa-fw fa-graduation-cap"></i> Authors</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('admin/reviews*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_reviews_all')}}"><i class="fa fa-fw fa-comments"></i> Reviews</a>--}}
            {{--</li>--}}
            {{--<li class="{{ Request::is('admin/events*') ? 'active' : null }}">--}}
                {{--<a href="{{route('admin_events_all')}}"><i class="fa fa-fw fa-comments"></i> Events</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>--}}
                {{--<ul id="demo" class="collapse">--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-fw fa-user"></i> Users</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{ Request::is('admin/orders') ? 'active' : null }}">--}}
                        {{--<a href="{{route('admin_orders_all')}}"><i class="fa fa-fw fa-graduation-cap"></i> Authors</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--</li>--}}
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>