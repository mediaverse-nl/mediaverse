@extends('layouts.admin')

@section('title', 'nieuw project')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>skill</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                    <tr class="table-row" data-href="{{route('board.skill.edit', $skill->id)}}">
                        <td>{{$skill->id}}</td>
                        <td>{{$skill->skill}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

        <a href="{{route('board.skill.create')}}">nieuw skill</a>

    </div>


@endsection