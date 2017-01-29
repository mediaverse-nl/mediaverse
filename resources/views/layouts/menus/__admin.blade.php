<style>
    .badge{
        background-color: #9d9d9d;
        color: #222;
    }
</style>

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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i>
                <b class="caret"></b>
                @php
                    $contact = $info['contact']->first();
                @endphp
                @if($contact)
                    <i style="font-size: 10px; top: 10px; right: 232px; position: fixed; color: #F0AD4E;" class="fa fa-exclamation-circle" aria-hidden="true"></i>
                @endif
            </a>
            <ul class="dropdown-menu message-dropdown">
                @if($contact)
                <li class="message-preview">
                    <a href="{{route('marketing.message.show', $contact->id)}}">
{{--                        @if($info['myTask']->exists() == true)--}}
                        {{--@endif--}}
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" width="50px" height="50px" src="https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-1/p200x200/12189854_748996681899145_5429050576464251690_n.png?oh=9b3a74b0df40cf93c0bc55647dcf0711&oe=591EEAE7" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>{{ $contact->name }}</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($contact->updated_at)->toDayDateTimeString()}}</p>
                                <p>{{ str_limit($contact->message, 40, '...') }}</p>
                            </div>
                        </div>
                    </a>
                </li>
                @endif

                <li class="message-footer">
                    <a href="{{route('marketing.message.index')}}">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if($info['myTask']->exists() == true)
                    <i style="font-size: 10px; top: 10px; right: 174px; position: fixed; color: #F0AD4E;" class="fa fa-exclamation-circle" aria-hidden="true"></i>
                @endif
                <i class="fa fa-bell"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu alert-dropdown">
                @if($info['myTask']->exists() == true)
                    <li>
                        <a href="{{route('developer.project.show', $info['myTask']->first()->project->id)}}">Running task <span class="label label-warning">Warning</span></a>
                    </li>
                @endif

                {{--<li class="divider"></li>--}}
                {{--<li>--}}
                    {{--<a href="#">View All</a>--}}
                {{--</li>--}}
            </ul>
        </li>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>--}}
                {{--</li>--}}
                <li>
                    <a href="/roundcube"><i class="fa fa-fw fa-envelope"></i> Web Mail</a>
                </li>
                <li>
                    <a href="{{route('profile.index')}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                {{--<li>--}}
{{--                    <a href="{{route('home')}}"><i class="fa fa-fw fa-envelope"></i> website</a>--}}
                {{--</li>--}}
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
            <li class="{{ Request::is('dashboard*') ? 'active' : null }}">
                <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            @if(Auth::user()->hasRole('board'))
                <li class="{{ Request::is('board/service*') ? 'active' : null }}">
                    <a href="{{route('board.service.index')}}"><i class="fa fa-fw fa-code-fork" aria-hidden="true"></i> Services <label class="badge pull-right">{{($info['service']->count())}}</label></a>
                </li>
                <li class="{{ Request::is('board/skill*') ? 'active' : null }}">
                    <a href="{{route('board.skill.index')}}"><i class="fa fa-fw fa-fire" aria-hidden="true"></i> Skills <label class="badge pull-right">{{($info['skill']->count())}}</label></a>
                </li>
                <li class="{{ Request::is('board/user*') ? 'active' : null }}">
                    <a href="{{route('board.user.index')}}"><i class="fa fa-fw fa-users"></i> Users <label class="badge pull-right">{{($info['user']->count())}}</label></a>
                </li>
                <li class="{{ Request::is('board/project*') ? 'active' : null }}">
                    <a href="{{route('board.project.index')}}"><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i> Projects <label class="badge pull-right">{{($info['project']->where('status', 'prograss')->count())}}</label></a>
                </li>
            @endif

            @if(Auth::user()->hasRole('marketing') || Auth::user()->hasRole('board'))
                <li class="{{ Request::is('marketing/message*') ? 'active' : null }}">
                    <a href="{{route('marketing.message.index')}}"><i class="fa fa-fw fa-comment-o" aria-hidden="true"></i> Messages <label class="badge pull-right">{{($info['contact']->where('status', 'none')->count())}}</label></a>
                </li>
                <li class="{{ Request::is('translations*') ? 'active' : null }}">
                    <a href="{{ url('/translations') }}"><i class="fa fa-fw fa-globe" aria-hidden="true"></i> Translations <label class="badge pull-right"></label></a>
                </li>
            @endif

            @if(Auth::user()->hasRole('financial') || Auth::user()->hasRole('board'))
                <li class="{{ Request::is('financial/finance*') ? 'active' : null }}">
                    <a href="{{route('financial.finance.index')}}"><i class="fa fa-fw fa-eur" aria-hidden="true"></i> Financials <label class="badge pull-right"></label></a>
                </li>
                <li class="{{ Request::is('financial/user*') ? 'active' : null }}">
                    <a><i class="fa fa-fw fa-id-card" aria-hidden="true"></i> Payroll <label class="pull-right"></label></a>
                </li>
                <li class="{{ Request::is('financial/invoice*') ? 'active' : null }}">
                    <a href="{{route('financial.invoice.index')}}"><i class="fa fa-fw fa-credit-card" aria-hidden="true"></i> Invoices  <label class="badge pull-right">{{($info['invoice']->where('status', 'open')->count())}}</label></a>
                </li>
            @endif

            @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('financial'))
                <li class="{{ Request::is('developer/project*') ? 'active' : null }}">
                    <a href="{{route('developer.project.index')}}"><i class="fa fa-fw fa-tasks"></i> Mijn projecten <label class="pull-right badge">{{($info['task']->where('user_id', Auth::user()->id)->count())}}</label></a>
                </li>
            @endif

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>