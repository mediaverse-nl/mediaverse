@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('design')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Design</h1>
                <p>
                    <strong><em>“Everything is designed. Few things are designed well.” </em></strong>
                </p>
                <p>
                    <strong><em>-Brian Reed</em></strong>
                </p>
                <p>
                    Design zit in vrijwel alles; bijna niets is zomaar ontstaan van wat nu wordt gebruikt. De stoel, de bank of de kruk waar u op zit is eerst uitgetekend en
                    ontworpen, daarna pas uitgewerkt tot een fysiek object. Denkt u aan goedkope merken in de supermarkt, deze zijn speciaal gemaakt om er goedkoop uit te
                    zien, zodat het een specifieke klant aan trekt. Toch is dit niet helemaal het design dat wij als Mediaverse behandelen. Wij werken met digitale media en
                    spelen meer in op het visueel ontwerpen van websites, foto’s, logo’s en/of illustraties.
                </p>
                <p>
                    Graphic design, ofwel grafische vormgeving, ziet u overal in de digitale wereld om u heen. Op social media, in de icoontjes van uw besturingssysteem, op
                    websites, enzovoort. Zonder graphic design zou het er allemaal plat, saai, kaal en hetzelfde uit zien. Designers spelen continue met verschillende
                    technieken en verschillende stijlen om aan de behoeftes te voldoen van de gebruikers van hun producten.
                </p>
                <p>
                    In het team van Mediaverse werken specialisten op het gebied van logo en merk design, website- en webshop-ontwerp, visuele communicatie,
                    product-illustratie et cetera. Om een juist beeld te geven aan de mensen die u wilt bereiken, kan bij voorbeeld een goed logo voor de gewenste uitstraling
                    zorgen. Samen met u gaan wij te werk om erachter te komen wat u met het logo wilt bereiken, welke klanten u wilt trekken en welke gedachte u achter het
                    logo of ontwerp heeft. Wij creëren een grafisch imago en benadrukken uw identiteit.
                </p>
                <p>
                    Heeft u er genoeg van om met slechte illustraties of foto’s te werken in uw webshops? Wilt u de producten in een nieuwe stijl vormgeven of het product van
                    een nieuwe kant laten zien? Dan is product illustratie misschien een oplossing voor u. Wij kunnen u hierbij helpen door de desbetreffende producten in een
                    mooie, nieuwe illustratie weer te geven die pakkend is voor de klanten en past bij de stijl van uw website.
                </p>
                <p>
                    Ook in de websites zelf zit enorm veel ontwerp. Om uw bedrijf goed weer te geven op haar site zal moeten worden gekeken hoe die weergave het best kan
                    worden omgezet in grafische vormgeving. Mediaverse kan uiteraard met het ontwerpen assisteren, maar daarnaast ook met een goede visuele communicatie tussen
                    u en de klant.
                </p>
                <p>
                    Een ontwerp is dus pas echt goed wanneer het de juiste mensen naar uw bedrijf toe trekt. Samen met u komen wij erachter op welke manier dit optimaal is te
                    verwezenlijken.
                </p>
                <p>
                    Mediaverse levert u niet zomaar een product of dienst, wij werken met u samen om hét perfecte eindresultaat te behalen.
                </p>

            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush