@extends('layouts.admin')

@section('title', 'videos')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard.videos'))--}}

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <h2>Bordered Table</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($references as $reference)
                        <tr class="table-row" data-href="{{route('admin.reference.edit', $reference->id)}}">
                            <td>{{$reference->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{--{!! $videos->appends(Input::except('page'))->render() !!}--}}
            </div>
        </div>

        <div class="col-lg-2 pull-right">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{route('admin.reference.create')}}">new</a></li>
                {{--<li class="list-group-item"><a href="{{route('admin_panel')}}">asdas</a></li>--}}
{{--                <li class="list-group-item"><a href="{{ url(route('admin_videos_all'),['game' => 1,'category' => 3,'page' => 6]) }}">asdas</a></li>--}}

            </ul>
        </div>

    </div>

@endsection

@section('javascript')

@endsection