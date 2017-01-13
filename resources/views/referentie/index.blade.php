@extends('layouts.app')

@section('title', 'This is an individual page title')
@section('description', 'This is a description')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referenties')])

    <div class="container">
        <div class="row">

            @foreach($project as $item)
                <div class="col-lg-4">
                    <div class="panel panel-default" style="border-radius: 0px; padding: 3px; background-color: #F4F4F4">
                        <a href="{{route('referenties.show', $item->name)}}">
                            <div class="col-ms-12" style="border: 1px solid rgba(0, 0, 0, 0.09); border-radius: 0px; padding: 3px;">
                                <img class="img-responsive" style="height: 170px;" src="/images/portfolio/{{$item->projectImage->first()->path}}">
                            </div>
                            <h2 class="" style="margin: 0px 15px 0px 0px !important; color: #267AB7 !important;">{{$item->name}}</h2>
                            <small style="color: #0E0E0E">
                                @foreach($item->projectService as $task)
                                    {{$task->service->name}}
                                @endforeach
                            </small>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop

@push('scripts')

@endpush

@push('css')

@endpush