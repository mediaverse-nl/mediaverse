@extends('layouts.admin')

@section('title', 'Messages')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-md-6">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>status</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="table-row" data-href="{{route('marketing.message.show', $contact->id)}}">
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->status}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td>{{$contact->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-md-6">

{{--        <a class="btn btn-default" href="{{route('board.invoice.create')}}">nieuw invoice</a>--}}

    </div>


@endsection