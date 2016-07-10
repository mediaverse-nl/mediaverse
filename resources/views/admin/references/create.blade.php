@extends('layouts.app')

@section('content')

<div class="page-header">
     <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('reference.create') !!}
            <div class="col-lg-12">
                <h1>new reference</h1>
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
                    {!! Form::open(['route' => 'admin.reference.store', 'class' => 'form-horizontal', 'files' => true]) !!}

                        <fieldset>

                            <!-- name -->
                            <div class="form-group">
                                {!! Form::label('name', 'name', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                                </div>
                            </div>

                            <!-- description -->
                            <div class="form-group">
                                {!! Form::label('description', 'description', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                                </div>
                            </div>

                            <!-- file -->
                            <div class="form-group">
                                {!! Form::label('thumbnail', 'thumbnail', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::file('thumbnail') !!}
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-primary pull-right'] ) !!}
                                </div>
                            </div>

                        </fieldset>

                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
