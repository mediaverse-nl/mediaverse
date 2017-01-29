@extends('layouts.admin')

@section('title', 'nieuw invoice')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    {!! Form::open(['route' => 'board.invoice.store']) !!}

        <div class="col-md-4">

            <!-- created_at -->
            <div class="form-group">
                {!! Form::label('adres', 'Adres') !!}
                {!! Form::text('adres', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('postcode', 'postcode') !!}
                {!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('stad', 'stad') !!}
                {!! Form::text('stad', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                @php
                    $count = DB::table('invoice')
                    ->select('created_at', DB::raw('count(*) as total'))
                    ->groupBy('created_at')
                    ->count();

                    $year =  \Carbon\Carbon::now()->year;
                    $month = \Carbon\Carbon::now()->month;
                    $endMonth = \Carbon\Carbon::now()->endOfMonth();

                    $count = $count < 9 ? '0'.$count : $count;
                    $month = $month < 9 ? '0'.$month : $month;
                    $invoice_id = $year.$month.$count+1;
                @endphp

                {!! Form::label('order_id', 'order_id') !!}
                {!! Form::text('order_id', $invoice_id, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('business', 'business') !!}
                {!! Form::text('business', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('business_name', 'business_name') !!}
                {!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kvk', 'kvk') !!}
                {!! Form::text('kvk', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('btw_nr', 'btw_nr') !!}
                {!! Form::text('btw_nr', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">

{{--                {{dd($projects->invoice->first())}}--}}
{{--                {{dd(array_except($projects->pluck('name', 'id'), $projects))}}--}}
                {!! Form::label('project_id', 'project_id') !!}
                {!! Form::select('project_id', $projects->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('aanmaken', ['class' => 'btn btn-primary pull-right'])!!}

        <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="form-group">
                {{--{!! Form::label('skills', 'skills') !!}<br>--}}
                {{--@foreach($skills as $skill)--}}
                    {{--{!! Form::checkbox('skills[]', $skill->id, Input::old('skills')) !!}--}}
                    {{--{!! Form::label('skills', $skill->skill) !!}<br>--}}
                {{--@endforeach--}}
            </div>
        </div>

    {!! Form::close() !!}

@endsection