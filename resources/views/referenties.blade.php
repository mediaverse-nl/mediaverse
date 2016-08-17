@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('referenties') !!}
                <div class="col-lg-12">
                    <h1>referenties</h1>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">

                    @foreach($references as $reference)
                        {{--{{$references->name}}--}}
                    @endforeach
                    <div class="col-lg-4">
                        <div class="row">
                            <img src="">
                        </div>
                        <div class="row">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
