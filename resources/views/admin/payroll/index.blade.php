@extends('layouts.admin')

@section('title', 'payroll')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Invoice Nr</th>
                    <th>status</th>
                    <th>Totaal</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                {{--@foreach ($invoices as $service)--}}
                    {{--<tr class="table-row" data-href="{{route('board.invoice.edit', $service->id)}}">--}}
                        {{--<td>{{$service->id}}</td>--}}
                        {{--<td>{{$service->order_id}}</td>--}}
                        {{--<td>{{$service->status}}</td>--}}
                        {{--<td>{{$service->invoiceItem->sum('price')}}</td>--}}
                        {{--<td>{{$service->created_at}}</td>--}}
                        {{--<td>{{$service->updated_at}}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

        <a class="btn btn-default" href="{{route('board.invoice.create')}}">nieuw invoice</a>

    </div>


@endsection