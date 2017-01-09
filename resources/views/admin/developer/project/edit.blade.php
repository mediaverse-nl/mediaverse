@extends('layouts.admin')

@section('title', 'project aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')
    {!! Form::model($project, array('route' => 'board.project.update', 'method' => 'patch', 'files' => true)) !!}

    <div class="col-md-6">
            {!! Form::hidden('id', $project->id) !!}
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('customer', 'customer') !!}
                {!! Form::text('customer', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('price', 'price') !!}
                {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('duur', 'duur') !!}
                {!! Form::text('duur', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('email', 'email') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('status', 'status') !!}
{{--                {!! Form::select('status', null, ['class' => 'form-control', 'placeholder' => '']) !!}--}}
                {{ Form::select('status', ['none' => 'none', 'ready' => 'ready', 'prograss' => 'prograss'], null, ['class' => 'form-control']) }}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('type', 'type') !!}
                {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('uml', 'uml') !!}
                {!! Form::file('uml', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('usecase', 'usecase') !!}
                {!! Form::file('usecase', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('pva', 'pva') !!}
                {!! Form::file('pva', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('contract', 'contract') !!}
                {!! Form::file('contract', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

    </div>

    <div class="col-md-6">

        {{--<a href="{{route('board.project.create')}}">nieuw skill</a>--}}

        <hr>

        <div class="col-lg-12">

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

            <label class="control-label">Select File</label>
            {!! Form::file('images[]', array('multiple' => true, 'data-show-caption' => 'true', 'data-show-upload' => 'false')) !!}
            <hr class="col-lg-12">

        </div>

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
            @foreach($users as $user)
                {!! Form::checkbox('users[]', $user->id, in_array($user->id, collect($project->projectUser->lists('user_id'))->toArray())) !!}
                {!! Form::label('users', $user->name) !!}
                <br>
                (
                @foreach($user->userRole as $role)
                    <small>{{$role->role->status}},</small>
                @endforeach
                )
            @endforeach
            <hr class="col-lg-12">
        </div>

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('services', 'services') !!}<br>
            @foreach($services as $service)
                <div class="col-lg-3">
                    {!! Form::checkbox('services[]', $service->id, in_array($service->id, collect($project->projectService->lists('service_id'))->toArray())) !!}
                    {!! Form::label('services', $service->name) !!}
                </div>
            @endforeach
            <hr class="col-lg-12">
        </div>

        <hr>
        <div class="form-group col-lg-12">
            {!! Form::label('skill', 'skills') !!}<br>
            @foreach($skills as $skill)
                <div class="col-lg-3">
                    {!! Form::checkbox('skills[]', $skill->id, in_array($skill->id, collect($project->projectSkill->lists('skill_id'))->toArray())) !!}
                    {!! Form::label('skills', $skill->skill) !!}
                </div>
            @endforeach
            <hr class="col-lg-12">
        </div>

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