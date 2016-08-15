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
        <div class="col-md-12">

            @foreach($references as $reference)
                {{$references->name}}
            @endforeach
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="{{route('referenties.show', 'product')}}">
                            <img src="/images/icons/responsive.png">
                            <h2>website</h2>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
