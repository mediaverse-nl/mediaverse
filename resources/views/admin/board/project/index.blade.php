@extends('layouts.admin')

@section('title', 'Project')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>project</th>
                    <th>uren</th>
                    <th>prijs</th>
                    <th>status</th>
                    <th>type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="table-row" data-href="{{route('board.project.edit', $project->id)}}">
                        <td>{{$project->id}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->duur}}</td>
                        <td>{{$project->price}}</td>
                        <td>{{$project->status}}</td>
                        <td>{{$project->type}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

        <a class="btn btn-default" href="{{route('board.project.create')}}">nieuw project</a>

    </div>

@endsection