@extends('layouts.admin')

@section('title', 'Service aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')
    {!! Form::model($service, array('route' => 'board.service.update', 'method' => 'patch')) !!}

    <div class="col-md-6">
            {!! Form::hidden('id', $service->id) !!}
            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>

            {!! Form::submit('aanpassen', ['class' => 'btn btn-primary pull-right'])!!}

    </div>

    <div class="col-md-6">

        {{--<a href="{{route('board.project.create')}}">nieuw skill</a>--}}

        <hr>
        {{--<div class="form-group">--}}
            {{--{!! Form::label('roles', 'roles') !!}<br>--}}
            {{--@foreach($roles as $role)--}}
                {{--{!! Form::checkbox('roles[]', $role->id, in_array($role->id, collect($project->projectRole->lists('role_id'))->toArray())) !!}--}}
                {{--{!! Form::label('roles', $role->status) !!}<br>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        {{--<hr>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('roles', 'users') !!}<br>--}}
            {{--@foreach($users as $user)--}}
                {{--{!! Form::checkbox('users[]', $user->id, in_array($user->id, collect($project->projectUser->lists('user_id'))->toArray())) !!}--}}
                {{--{!! Form::label('users', $user->name) !!}--}}
                {{--<br>--}}
                {{--(--}}
                {{--@foreach($user->userRole as $role)--}}
                    {{--<small>{{$role->role->status}},</small>--}}
                {{--@endforeach--}}
                {{--)--}}
            {{--@endforeach--}}
        {{--</div>--}}

        {{--<hr>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('roles', 'diensten') !!}<br>--}}
            {{--@foreach($roles as $role)--}}
                {{--{!! Form::checkbox('roles[]', $role->id, in_array($role->id, collect($project->projectRole->lists('role_id'))->toArray())) !!}--}}
                {{--{!! Form::label('roles', $role->status) !!}<br>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        {{--<hr>--}}
        {{--<div class="form-group">--}}
            {{--{!! Form::label('skill', 'skills') !!}<br>--}}
            {{--@foreach($skills as $skill)--}}
                {{--{!! Form::checkbox('skills[]', $skill->id, in_array($skill->id, collect($project->projectSkill->lists('skill_id'))->toArray())) !!}--}}
                {{--{!! Form::label('skills', $skill->skill) !!}<br>--}}
            {{--@endforeach--}}
        {{--</div>--}}

    </div>

    {!! Form::close() !!}

@endsection