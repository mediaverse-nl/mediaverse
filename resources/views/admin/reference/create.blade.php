@extends('layouts.admin')

@section('title', 'Create reference')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">

                    @include('layouts.menus.__admin')

                    {{--@include('xeedus.dev.resources.views.errors.message')--}}

                    {!! Form::open(['route' => 'admin.reference.store']) !!}

                    {!! Form::label('title', 'title') !!}
                    {!! Form::text('title') !!}<br>

                    {!! Form::label('link', 'link') !!}
                    {!! Form::text('link') !!}<br>

                    {!! Form::label('beschrijving', 'beschrijving') !!}
                    {!! Form::text('beschrijving') !!}<br>

                    {!! Form::label('werkzaamheden', 'werkzaamheden') !!}
                    {!! Form::text('werkzaamheden') !!}<br>

                    {!! Form::label('resultaten', 'resultaten') !!}
                    {!! Form::text('resultaten') !!}<br>
{{--<br>--}}
                    {{--{!! Form::Label('cate_id', 'cate_id:') !!}--}}

                        {{--<select class="cate_id" name="cate_id">--}}
                            {{--<option value="0">main</option>--}}
                            {{--@foreach($categories as $item)--}}
                                {{--<option value="{{$item->id}}">--}}
                                    {{--{{$item->name}}--}}
                                {{--</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}

                    <br>
                    {!! Form::submit('submit', ['class' => 'btn btn-primary'])!!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop