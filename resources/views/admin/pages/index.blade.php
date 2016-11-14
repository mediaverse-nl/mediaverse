@extends('layouts.admin')

@section('title', 'Dashboard > Pages > Index')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-condensed table-bordered table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nr</th>
                        <th>page</th>
                        <th>page title</th>
                        <th>description</th>
                        <th>keywords</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            {{--<tr class="table-row" data-href="">--}}
                            <tr class="table-row"data-href="{{URL::route('admin.pages.edit', $page->id)}}">
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->page }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->description }}</td>
                                <td>{{ $page->keywords }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection