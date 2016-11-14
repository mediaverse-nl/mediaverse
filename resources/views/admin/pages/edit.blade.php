@extends('layouts.admin')

@section('title', 'user')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard.user.edit'))--}}

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">edit</div>

                    <div class="panel-body">

                        @include('errors.message')

                        {!! Form::model($page, array('route' => ['admin.pages.update', $page->id], 'method' => 'patch')) !!}

                        <div class="form-group">
                            {!! Form::label('page', 'page') !!}
                            {!! Form::text('page', null, ['class' => 'form-control', 'disabled']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('title', 'title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'description') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('keywords', 'keywords') !!}
                            {!! Form::textarea('keywords', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                        {{--<a href="{{ URL::route('admin_profile_all') }}" class="btn btn-default">terug</a>--}}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('javascript')

@endsection