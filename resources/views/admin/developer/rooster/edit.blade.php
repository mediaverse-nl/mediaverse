@extends('layouts.admin')

@section('title', 'Invoice aanpassen')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-lg-12">
        <a href="{{route('board.invoice.show',$invoice->id )}}" class="btn btn-default ">preview</a>
        <hr>
    </div>

    <div class="col-md-6">
        {!! Form::model($invoice, array('route' => 'board.invoice.update', 'method' => 'patch')) !!}

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
        {!! Form::close() !!}

    </div>

    <div class="col-md-6">

        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">Voeg product toe aan factuur</div>--}}
            {{--<div class="panel-body">--}}

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-lg-7">name</th>
                            <th class="col-lg-2">Aantal</th>
                            <th class="col-lg-2">prijs</th>
                            <th class="col-lg-1">Opties</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{--{{dd($invoice->invoiceItem)}}--}}
                        @foreach($invoice->invoiceItem as $item)
                            <tr>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->qty}}
                                </td>
                                <td>
                                    {{$item->price}}
                                </td>
                                <td>
                                    {!! Form::open(array('route' => 'board.invoice.update', 'method' => 'patch')) !!}
                                        {!! Form::submit('x', ['class' => 'btn btn-danger pull-right'])!!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            {!! Form::open(array('route' => 'board.invoice.update', 'method' => 'patch')) !!}
                                <td>
                                    {!! Form::hidden('invoice_id', $invoice->id, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    {!! Form::hidden('add_item', true, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                </td>
                                <td>
                                    {!! Form::number('qty', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                </td>
                                <td>
                                    {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                </td>
                                <td>
                                    {!! Form::submit('+', ['class' => 'btn btn-success pull-right'])!!}
                                </td>
                            {!! Form::close() !!}
                        </tr>
                    </tbody>


                </table>


                {{--{!! Form::model(null, array('route' => 'board.service.update', 'method' => 'patch')) !!}--}}

                {{--<div class="form-group col-lg-7">--}}
                    {{--{!! Form::label('name', 'name') !!}--}}
                {{--</div>--}}

                {{--<div class="form-group col-lg-2">--}}
                    {{--{!! Form::label('qty', 'qty') !!}--}}
                {{--</div>--}}

                {{--<div class="form-group col-lg-3">--}}
                    {{--{!! Form::label('price', 'price') !!}--}}
                {{--</div>--}}


                {{--{!! Form::close() !!}--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>


@endsection