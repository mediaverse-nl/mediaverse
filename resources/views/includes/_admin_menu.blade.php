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
</style>


<div class="col-lg-2">
    <div class="panel">
        <h1>Menu</h1>
        <hr>
        <ul class="nav navbar-nav">
            <li class="{{ Request::url() == route('admin.index') ? 'active' : '' }}"><a href="{{route('admin.index')}}">home</a></li>
            <li class="{{ Request::url() == route('admin.reference.index') ? 'active' : '' }}"><a href="{{route('admin.reference.index')}}">references</a></li>
        </ul>
    </div>
</div>