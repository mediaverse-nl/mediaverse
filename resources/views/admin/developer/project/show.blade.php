@extends('layouts.admin')

@section('title', 'Mijn project: '. $project->name. ' <div id="txt" class="pull-right" onload="startTime()"></div>')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-8">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>user</th>
                    <th>description</th>
                    <th class="text-center" style="width: 70px;">moscow</th>
                    <th class="text-center" style="width: 90px;">done min</th>
                    <th class="text-center" style="width: 90px;">do in min</th>
                    <th style="width: 100px;">opties</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($project->projectTask as $item)
                    <tr class="table-row" data-href="{{route('developer.project.edit', $item->id)}}">
                    {{--<tr class="table-row" data-href="{{route('developer.project.show', $item->project->id)}}">--}}
                        <td>{{$item->id}}</td>
                        <td>{{$item->task_name}}</td>
                        <td>{{$item->user['name']}}</td>
                        <td>{{$item->description}}</td>
                        <td class="text-center">{{$item->moscow}}</td>
                        <td class="text-center" style="background-color: #{{$item->do_min * 60 > $item->done_min ? '5cb85c' : 'c9302c'}}; color:#fff; opacity: .65">{{$item->done_min ? gmdate('H:i:s', $item->done_min) : '00:00:00'}}</td>
                        <td class="text-center">{{gmdate('H:i:s', $item->do_min * 60)}}</td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-4">

        {!! Form::open(array('route' => 'developer.project.store', 'method' => 'post')) !!}

            <div class="panel panel-default">
                <div class="panel-heading">Nieuwe taak</div>
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

@endsection

@push('javascript')
    <script>
        function startTime() {

            var today = new Date();
            console.log()
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                    h + ":" + m + ":" + s;
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