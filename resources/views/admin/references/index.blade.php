@extends('layouts.app')

@section('content')

<div class="page-header">
     <div class="container">
        <div class="row">
            {!! Breadcrumbs::render('reference') !!}
            <div class="col-lg-12">
                <h1>reference</h1>
            </div>
        </div>
     </div>
</div>

<div class="container">
    <div class="row">
        @include('includes._admin_menu')

        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="btn btn-primary pull-right" href="{{route('admin.reference.create')}}">edit</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($references as $reference)

                                <tr>
                                    <td>{{$reference->name}}</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
