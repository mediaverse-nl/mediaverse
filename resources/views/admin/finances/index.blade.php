@extends('layouts.admin')

@section('title', 'finances')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">
        <div id="chart"></div>


    </div>

    <div class="col-md-6">

        {{--<a class="btn btn-default" href="{{route('board.invoice.create')}}">nieuw invoice</a>--}}

    </div>

@endsection

@push('javascript')

{{--{!! json_encode(\Illuminate\Support\Facades\DB::table('orders')--}}
                {{--->groupBy('status')--}}
                {{--->orderBy('status', 'ASC')--}}
                {{--->get([--}}
                  {{--\Illuminate\Support\Facades\DB::raw('COUNT(*) as value'),--}}
                  {{--\Illuminate\Support\Facades\DB::raw('status as label')--}}
                {{--])) !!}--}}



    <script>
        new Morris.Line({
            element: 'chart',
            data: {!! json_encode( \DB::table('invoice')
            ->select(DB::raw('MONTHNAME(updated_at) as month'), DB::raw("DATE_FORMAT(updated_at,'%Y-%m') as monthNum"), DB::raw('count(*) as orders'))
            ->groupBy('monthNum')
            ->get()) !!},
            xkey: 'monthNum',
            ykeys: ['orders'],
            labels: ['orders']
        });
    </script>

@endpush

@push('stylesheet')
    <style>
        #chart{
            height:400px;
        }
    </style>
@endpush