@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                {!! Breadcrumbs::render('panel') !!}
                <div class="col-lg-12">
                    <h1>panel</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            @include('includes._admin_menu')

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="col-lg-3 col-md-6">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-share-alt fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">0</div>
                                            <div>Reference!</div>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{route('admin.reference.index')}}">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
