@extends('layouts.admin')

@section('title', 'Mijn projecten')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>project</th>
                    <th>uren</th>
                    {{--<th>prijs</th>--}}
                    <th>status</th>
                    <th>project uren</th>
                    <th>gewerkte uren</th>
                    {{--<th>type</th>--}}
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="table-row" data-href="{{route('developer.project.show', $project->project->id)}}">
                        <td>{{$project->project->id}}</td>
                        <td>{{$project->project->name}}</td>
                        <td>{{$project->project->duur}}</td>
                        {{--<td>{{$project->project->price}}</td>--}}
                        <td>{{$project->project->status}}</td>
                        <td>{{minToHours($project->project->projectTask->where('user_id', Auth::user()->id)->sum('do_min'))}}</td>
                        <td>{{minToHours($project->project->projectTask->where('user_id', Auth::user()->id)->sum('done_min'))}}</td>
{{--                        <td>{{$project->project->type}}</td>--}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

        {{--<a href="{{route('board.project.create')}}">nieuw skill</a>--}}

    </div>

@endsection