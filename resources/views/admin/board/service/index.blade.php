@extends('layouts.admin')

@section('title', 'Services')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="table-row" data-href="{{route('board.service.edit', $service->id)}}">
                        <td>{{$service->id}}</td>
                        <td>{{$service->name}}</td>
                        <td>{{$service->created_at}}</td>
                        <td>{{$service->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

        <a class="btn btn-default" href="{{route('board.service.create')}}">nieuw service</a>

    </div>


@endsection