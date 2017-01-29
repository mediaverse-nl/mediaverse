@extends('layouts.app')

@section('title', trans('page.reference.title'))
@section('description', trans('page.reference.description'))
@section('keywords', trans('page.reference.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('referenties')])

    <div class="container">
        <div class="row">

            @foreach($project as $item)
                <div class="col-lg-4">
                    <div class="panel panel-default" style="border-radius: 0px; padding: 3px; background-color: #F4F4F4">
                        <a href="{{route('referenties.show', str_replace(' ', '-', $item->name))}}">
                            <div class="col-ms-12" style="border: 1px solid rgba(0, 0, 0, 0.09); border-radius: 0px; padding: 3px;">
                                <img class="img-responsive" style="height: 170px; width: 100%;" src="/images/portfolio/{{$item->projectImage->first()->path}}">
                            </div>
                            <h2 class="title-pro" style="color: #267AB7 !important;">{{$item->name}}</h2>
                            <small class="labels" style="color: #0E0E0E">
                                @foreach($item->projectService as $task)
                                    <span class="badge" style="margin-right: 5px; background-color: #0E0E0E;">{{($task->service->name)}}</span>
                                @endforeach
                            </small>
                            <br><br>
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
    <style>
        .panel{
            padding: 0px !important;
            border: 1px solid #0E0E0E;
        }
        .title-pro{
            margin: 0px 15px 0px 10px !important;
        }
        .labels{
            margin: 0px 15px 0px 10px !important;
        }
        .panel > a:hover{
            text-decoration: none;
        }
    </style>
@endpush