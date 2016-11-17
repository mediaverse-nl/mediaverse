@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('laravel-websites')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Laravel Websites</h1>
                <p>
                    Laravel is een een framework die wij zoveel mogelijk proberen te hanteren in het schrijven van onze website, -shops en -applicaties. Om de
                    gebruiksvriendelijkheid en functionaliteit van onze producten te kunnen waarborgen houden wij onophoudelijk onze aandacht gevestigd op nieuwe
                    ontwikkelingen in de ICT-branche. Laravel is voor ons dus een bewuste keuze. Het is een framework dat zorgt voor snelle producten en het verhoogt de
                    productiviteit van onze programmeurs.
                </p>
                <p>
                    Door gebruik te maken van nieuwe frameworks, zoals Laravel, worden de applicaties die gebouwd worden ook een stuk veiliger. Nieuwe functies kunnen
                    moeiteloos worden toegevoegd zonder dat dit gevolg zal hebben voor de functionaliteit en stabiliteit van het product.
                </p>
            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush