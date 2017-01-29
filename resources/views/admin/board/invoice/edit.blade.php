@extends('layouts.admin')

@section('title', 'Invoice aanpassen: '.$invoice->order_id)
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-lg-12">
        <a href="{{route('financial.invoice.show',$invoice->id )}}" class="btn btn-default ">preview</a>
        <hr>
    </div>

    <div class="col-md-6">
        {!! Form::model($invoice, array('route' => 'financial.invoice.update', 'method' => 'patch')) !!}
        {!! Form::hidden('id', null) !!}
        {!! Form::hidden('add_item', false) !!}
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
                {!! Form::label('name', 'klant naam') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('order_id', 'order_id') !!}
                {!! Form::text('order_id', null, ['class' => 'form-control', 'placeholder' => '', 'disabled']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('business_name', 'bedrijfsnaam') !!}
                {!! Form::text('business_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kvk', 'kvk nummer') !!}
                {!! Form::text('kvk', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('btw_nr', 'btw nummer') !!}
                {!! Form::text('btw_nr', null, ['class' => 'form-control', 'placeholder' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('project_id', 'project_id') !!}
                {!! Form::select('project_id', $projects->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('update', ['class' => 'btn btn-primary pull-right'])!!}
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
                                    {!! Form::open(array('route' => 'financial.invoice.destroy', 'method' => 'delete')) !!}
                                        {!! Form::hidden('invoice_item', $item->id, ['class' => 'form-control', 'placeholder' => '']) !!}
                                        {!! Form::submit('x', ['class' => 'btn btn-danger pull-right'])!!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            {!! Form::open(array('route' => 'financial.invoice.update', 'method' => 'patch')) !!}
                                <td>
                                    {!! Form::hidden('invoice_id', $invoice->id, ['class' => 'form-control', 'placeholder' => '']) !!}
                                    {!! Form::hidden('id', $invoice->id) !!}
                                    {!! Form::hidden('add_item', 1, ['class' => 'form-control', 'placeholder' => '']) !!}
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