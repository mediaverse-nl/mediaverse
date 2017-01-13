@extends('layouts.admin')

@section('title', 'Users')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="col-lg-8">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>profile_image</th>
                    {{--<th>email</th>--}}
                    <th>name</th>
                    {{--<th>lastname</th>--}}
                    {{--<th>address</th>--}}
                    <th>postcode</th>
                    <th>hourly_wage</th>
                    {{--<th>bank_id</th>--}}
                    <th>created_at</th>
                    <th>updated_at</th>
                    {{--<th>name</th>--}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="table-row" data-href="{{route('board.user.edit', $user->id)}}">
                        <td>{{$user->id}}</td>
                        <td>{{$user->profile_image}}</td>
                        {{--<td>{{$user->email}}</td>--}}
                        <td>{{$user->name}}</td>
                        {{--<td>{{$user->lastname}}</td>--}}
                        {{--<td>{{$user->address}}</td>--}}
                        <td>{{$user->postcode}}</td>
                        <td>{{$user->hourly_wage}}</td>
                        {{--<td>{{$user->bank_id}}</td>--}}
                        {{--<td>{{$user->id_front}}</td>--}}
                        {{--<td>{{$user->id_back}}</td>--}}
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-lg-2">

        {{--<a class="btn btn-default" href="{{route('board.user.create')}}">nieuwe user</a>--}}

    </div>


@endsection