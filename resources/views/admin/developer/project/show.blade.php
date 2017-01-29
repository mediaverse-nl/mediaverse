@extends('layouts.admin')

@section('title', 'Mijn project: '. $project->name. ' <div id="txt" class="pull-right" onload="startTime()"></div>')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-12">
        <div class="row">

            <div class="col-lg-2">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-clock-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Totale project duur</div>
                                <div class="">{{minTohours($project->projectTask->sum('done_min'))}} </div>
                                <div class="">{{minTohours($project->projectTask->sum('do_min') * 60)}} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($project->projectUser as $user)
                <div class="col-lg-2">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div style="font-size: 22px;">{{str_limit($user->user->name, 15, '..')}}</div>
                                </div>
                                <div class="col-xs-8 text-left">
                                    <div class="">gewerkt</div>
                                    <div class="">totaal duur</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <div style="margin-left: -15px;">{{minTohours($project->projectTask->where('user_id', $user->user->id)->sum('done_min'))}} </div>
                                    <div style="margin-left: -15px;">{{minTohours($project->projectTask->where('user_id', $user->user->id)->sum('do_min') * 60)}} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="col-md-8">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>user</th>
                    <th>description</th>
                    <th class="text-center" style="width: 70px;">moscow</th>
                    <th class="text-center" style="width: 90px;">done in</th>
                    <th class="text-center" style="width: 90px;">to do in</th>
                    <th style="width: 100px;">opties</th>
                    <th style="width: 20px;">check</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($project->projectTask()->orderBy('check', 'asc')->get() as $item)
                    <tr class="table-row {{ $item->check == '1' ? 'warning':''}} {{$item->user_id == Auth::user()->id ? 'info' : '' }}  {{$item->status == 'running' ? 'success':'' }}" data-href="{{route('developer.project.edit', $item->id)}}">
                    {{--<tr class="table-row" data-href="{{route('developer.project.show', $item->project->id)}}">--}}
                        <td>{{$item->id}}</td>
                        <td>{{$item->task_name}}</td>
                        <td>{{$item->user['name']}}</td>
                        <td>{{$item->description}}</td>
                        <td class="text-center">{{$item->moscow}}</td>
                        <td class="text-center" style="background-color: #{{$item->do_min * 60 > $item->done_min ? '5cb85c' : 'c9302c'}}; color:#fff; opacity: .65">{{$item->done_min ? minTohours($item->status == 'running' ? \App\Project::taskTimer($item->updated_at, $item->done_min) : $item->done_min) : '00:00:00'}}</td>
                        <td class="text-center">{{minTohours($item->do_min * 60)}}</td>
                        <td class="text-center">
                            {!! Form::model($item, array('route' => 'developer.project.start', 'method' => 'patch')) !!}
                                {!! Form::hidden('project_id', $project->id) !!}
                                {!! Form::hidden('id', null) !!}
                                @if($item->user_id == Auth::user()->id)
                                    @if($item->status == 'stop')
                                        @if($status == false)
                                            {!! Form::hidden('status', 'running') !!}
                                            {!! Form::submit('start', ['class' => 'btn btn-success btn-sm pull-left'])!!}
                                        @else
                                            <div class="btn btn-success pull-left btn-sm disabled">start</div>
                                        @endif
                                    @else
                                        @if($status == true)
                                            {!! Form::hidden('status', 'stop') !!}
                                            {!! Form::submit('stop', ['class' => 'btn btn-danger btn-sm pull-left'])!!}
                                        @else
                                            <div class="btn btn-success pull-left btn-sm disabled">start</div>
                                        @endif
                                    @endif
                                @else
                                    @if($item->status == 'stop')
                                        <div class="btn btn-success pull-left btn-sm disabled">start</div>
                                    @else
                                        <div class="btn btn-danger pull-left btn-sm disabled">stop</div>
                                    @endif
                                @endif
                            {!! Form::close() !!}

                            @if($item->status == 'running')
                                {!! Form::submit('X', ['class' => 'btn btn-sm btn-danger pull-right', 'disabled'])!!}
                            @else
                                {{ Form::open(['method' => 'DELETE', 'route' => ['developer.task.destroy']]) }}
                                    {!! Form::hidden('id', $item->id) !!}
                                    {!! Form::submit('X', ['class' => 'btn btn-sm btn-danger pull-right', 'onclick' => 'return confirm("Weet je zeker dat je (taak '.$item->id.') wilt verwijderen?")'])!!}
                                {!! Form::close() !!}
                            @endif
                        </td>
                        <td>
                            @if($item->user_id == Auth::user()->id)
                                {{ Form::open(['method' => 'patch', 'route' => ['developer.project.check']]) }}
                                {!! Form::hidden('id', $item->id) !!}
                                {!! Form::hidden('check', $item->check) !!}
                                <button class="btn btn-sm btn-default">
                                    <i style="font-size: 15px;" class="fa {{ $item->check == 1 ? 'fa-check-square-o' : 'fa-square-o' }}" aria-hidden="true"></i>
                                </button>
                                {!! Form::close() !!}
                            @else
                                <a class="btn btn-sm btn-default" disabled="">
                                    <i style="font-size: 15px;" class="fa {{ $item->check == 1 ? 'fa-check-square-o' : 'fa-square-o' }}" aria-hidden="true"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-4">

        <div class="bs-example">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab" aria-expanded="true">Nieuwe taak</a></li>
                <li role="presentation" class=""><a href="#2" aria-controls="2" role="tab" data-toggle="tab" aria-expanded="false">Project informatie</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="1">
                    {!! Form::open(array('route' => 'developer.project.store', 'method' => 'post')) !!}

                    <div class="panel panel-default" style="border-top: none; border-top-left-radius: 0px; border-bottom-right-radius: 0px;">
                        <div class="panel-body">

                        {!! Form::hidden('project_id', $project->id) !!}
                        {!! Form::hidden('status', 'stop') !!}
                        <!-- created_at -->
                            <div class="form-group">
                                {!! Form::label('task_name', 'Taak') !!}
                                {!! Form::text('task_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('do_min', 'Ingeschatte tijd (min)') !!}
                                {!! Form::number('do_min', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    {!! Form::label('moscow', 'MoSCoW') !!}
                                    {!! Form::select('moscow', ['must' => 'must','should ' => 'should ','could ' => 'could ', "won't" => "won't",], null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group col-lg-6">
                                    {!! Form::label('user', 'user') !!}
                                    {!! Form::select('user', collect($users)->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'description') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('remark', 'remark') !!}
                                {!! Form::textarea('remark', null, ['class' => 'form-control', 'rows' => '3']) !!}
                            </div>

                            {!! Form::submit('toevoegen', ['class' => 'btn btn-primary pull-right'])!!}

                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div role="tabpanel" class="tab-pane" id="2">
                    <div class="panel panel-default" style="border-top: none; border-top-left-radius: 0px; border-bottom-right-radius: 0px;">
                        <div class="panel-body">
                            Customer : {{$project->customer}}<br><br>

                            E-mail : {{$project->email}}<br>
                            Telefoon Nr : {{$project->telefoon}}<br>
                            {{--Address : {{$project->address}}<br>--}}
                            {{--Address : {{$project->postcode}}<br>--}}
                            Status : {{$project->status}}<br><br>
                            Project beschrijving :<br> {{$project->omschrijving}}
                        </div>
                    </div>
               </div>
            </div>
        </div>

    </div>

    {{--<div class="col-lg-12">--}}
        {{--<div id="pie-chart" style="height: 200px;"></div>--}}
    {{--</div>--}}

@endsection

@push('stylesheet')
    <style>
        .tab-pane{
            display: none;
        }

        .active{
            background-color: #F5F5F5 !important;
        }

        .active-tap
        {
            display: block !important;
        }
    </style>
@endpush

@push('javascript')
<script>
    function startTime() {

        var today = new Date();
        {{--var today = new Date("2015-06-17 {!! minTohours(\App\Project::taskTimer($project->projectTask()->first()->updated_at, $project->projectTask()->first()->done_min)) !!}");--}}
        console.log(today)
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
//        var d = today.getDay();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
               h + ":" + m + ":" + s;
//               d + ":" + h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }

    window.onload = function() {
        startTime();
    }
</script>

    {{--<script>--}}

        {{--Morris.Donut({--}}
            {{--element: 'pie-chart',--}}
            {{--data: [--}}
                {{--{label: "Friends", value: 30},--}}
                {{--{label: "Allies", value: 15},--}}
                {{--{label: "Enemies", value: 45},--}}
                {{--{label: "Neutral", value: 10}--}}
            {{--]--}}
        {{--});--}}

    {{--</script>--}}



    {{--<script>--}}
        {{--$('.deleteProduct').on('click', function(e) {--}}
            {{--var inputData = $('#formDeleteProduct').serialize();--}}

            {{--var dataId = $('#btnDeleteProduct').attr('data-id');--}}
            {{--var parent = $(this).parent();--}}

            {{--$.ajax({--}}
                {{--url: '{{ url('/admin/products') }}' + '/' + dataId,--}}
                {{--type: 'POST',--}}
                {{--data: inputData,--}}
                {{--success: function( msg ) {--}}
                    {{--if ( msg.status === 'success' ) {--}}
                        {{--toastr.success( msg.msg );--}}
                        {{--// you don't need to reload your page, just remove the row from DOM--}}
                        {{--parent.slideUp(300, function () {--}}
                            {{--parent.closest("tr").remove();--}}
                        {{--});--}}
                    {{--}--}}
                {{--},--}}
                {{--error: function( data ) {--}}
                    {{--if ( data.status === 422 ) {--}}
                        {{--toastr.error('Cannot delete the category');--}}
                    {{--}--}}
                {{--}--}}
            {{--});--}}

            {{--return false;--}}
        {{--});--}}
    {{--</script>--}}
@endpush