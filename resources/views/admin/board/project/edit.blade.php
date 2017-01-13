@extends('layouts.admin')

@section('title', 'Project aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-4">

        <label>Foto's</label>
        <div class="row">
            @foreach($project->projectImage as $image)
                <div class="col-lg-2">
                    {!! Form::open([ 'method'  => 'delete', 'route' => [ 'board.image.destroy', $image->id ], 'class' => 'img_container']) !!}
                    <img style="height: 100px; width: 100px; border: 1px solid #777; display: inline;" src="/images/portfolio/{{$image->path}}"/>
                    {!! Form::button('delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm button']) !!}
                    {!! Form::close() !!}
                </div>
            @endforeach
        </div>
        {!! Form::model($project, array('route' => 'board.project.update', 'method' => 'patch', 'files' => true)) !!}

        <label class="control-label">Selecteer foto('s)</label>
        {!! Form::file('images[]', array('multiple' => true, 'data-show-caption' => 'true', 'data-show-upload' => 'false')) !!}
        <hr >

        <div class="form-group">
            {!! Form::label('omschrijving', 'omschrijving') !!}
            <small class="text-muted">project</small>
            {!! Form::textarea('omschrijving', null, ['class' => 'form-control', 'placeholder' => '', 'rows' => '7']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('resultaat', 'resultaat') !!}
            <small class="text-muted">project</small>
            {!! Form::textarea('resultaat', null, ['class' => 'form-control', 'placeholder' => '', 'rows' => '7']) !!}
        </div>
    </div>

    <div class="col-md-4">

        {!! Form::hidden('id', $project->id) !!}
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('name', 'project naam') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('customer', 'klant naam') !!}
            {!! Form::text('customer', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('website', 'website') !!}
            {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('email', 'email') !!}
            <small class="text-muted">Klant</small>
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('telefoon', 'telefoon') !!}
            <small class="text-muted">Klant</small>
            {!! Form::text('telefoon', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('price', 'price') !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>
        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('duur', 'ingeschatte duur ') !!}
            {!! Form::number('duur', null, ['class' => 'form-control', 'placeholder' => '']) !!}
        </div>

        <!-- created_at -->
        <div class="form-group">
            {!! Form::label('status', 'status') !!}
{{--                {!! Form::select('status', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
            {{ Form::select('status', ['none' => 'none', 'ready' => 'ready', 'prograss' => 'prograss'], null, ['class' => 'form-control']) }}
        </div>
        <!-- created_at -->
        <!-- created_at -->
    </div>

    <div class="col-md-4">

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('roles', 'roles') !!}<br>
            @foreach($roles as $role)
                {!! Form::checkbox('roles[]', $role->id, in_array($role->id, collect($project->projectRole->lists('role_id'))->toArray())) !!}
                {!! Form::label('roles', $role->status) !!}<br>
            @endforeach
            <hr class="col-lg-12">
        </div>

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('roles', 'users') !!}<br>
            <div class="row">
                @foreach($users as $user)
                    <div class="col-lg-6">
                        {!! Form::checkbox('users[]', $user->id, in_array($user->id, collect($project->projectUser->lists('user_id'))->toArray())) !!}
                        {!! Form::label('users', $user->name) !!}
                        <br>
                        (
                        @foreach($user->userRole as $role)
                            <small>{{$role->role->status}},</small>
                        @endforeach
                        )
                    </div>
                @endforeach
            </div>
            <hr class="col-lg-12">
        </div>

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('services', 'services') !!}<br>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4">
                        {!! Form::checkbox('services[]', $service->id, in_array($service->id, collect($project->projectService->lists('service_id'))->toArray())) !!}
                        {!! Form::label('services', $service->name) !!}
                    </div>
                @endforeach
            </div>
            <hr class="col-lg-12">
        </div>

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('skill', 'skills') !!}<br>
            <div class="row">
                @foreach($skills as $skill)
                    <div class="col-lg-4">
                        {!! Form::checkbox('skills[]', $skill->id, in_array($skill->id, collect($project->projectSkill->lists('skill_id'))->toArray())) !!}
                        {!! Form::label('skills', $skill->skill) !!}
                    </div>
                @endforeach
            </div>
            <hr class="col-lg-12">
        </div>

        {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

        {{--<div class="form-group">--}}
            {{--{!! Form::label('uml', 'uml') !!}--}}
            {{--{!! Form::file('uml', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
        {{--</div>--}}
        {{--<!-- created_at -->--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('usecase', 'usecase') !!}--}}
            {{--{!! Form::file('usecase', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
        {{--</div>--}}
        {{--<!-- created_at -->--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('pva', 'pva') !!}--}}
            {{--{!! Form::file('pva', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
        {{--</div>--}}
        {{--<!-- created_at -->--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('contract', 'contract') !!}--}}
            {{--{!! Form::file('contract', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
        {{--</div>--}}

    </div>

    {!! Form::close() !!}

@endsection

@push('stylesheet')
    <style>
        .button{
            margin-top: -52px !important;
            border-radius: 0px;
        }
    </style>
@endpush