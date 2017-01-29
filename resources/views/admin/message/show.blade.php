@extends('layouts.admin')

@section('title', 'Message preview')
{{--@section('breadcrumb', Breadcrumbs::render('dashboard'))--}}

@section('content')

    <div class="invoice-box">
        <b>Naam:</b> {{$contact->name}}<br>
        <b>E-mail:</b> {{$contact->email}}<br>
        <b>Telefoon Nr:</b> {{$contact->mobile}}<br><br>

        <b>Bericht:</b><br>
        {{$contact->message}}<br><br>

        <b>Verzonden op: </b>{{$contact->created_at}}<br>
        <b>Laatst gezien:</b> {{$contact->updated_at}}<br>
    </div>

@endsection

@push('stylesheet')

@endpush

@push('javascript')

@endpush