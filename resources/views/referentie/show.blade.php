@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')

@push('meta-tags')

@endpush

@section('content')
    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referentie', $project)])

    <div class="container">
        <div class="row">

            @foreach($project->projectImage as $image)
                <img src="/images/portfolio/{{$image->path}}" height="400px;">
            @endforeach

            <div class="col-lg-12">
                <h1 style="color: #267AB7; ">Project: {{$project->name}}</h1>

                <label class="text-muted">verleende diensten:</label>
                <small>
                    @foreach($project->projectService as $service)
                        {{$service->service->name}},
                    @endforeach

                </small>
                <br>
                <br>

                <label>Beschrijving:</label>
                <br>
                <p>{{$project->beschrijving}}</p>
            </div>

        </div>
    </div>

@stop

@push('scripts')

@endpush

@push('css')

@endpush