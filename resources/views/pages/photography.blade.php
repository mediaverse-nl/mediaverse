@extends('layouts.app')

@section('title', trans('page.photography.title'))
@section('description', trans('page.photography.description'))
@section('keywords', trans('page.photography.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('fotografie')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>
                    Fotografie
                </h1>
                <p>
                    <strong>
                        <em>
                            “Photography is the only language that can be understood anywhere
                            in the world.”
                        </em>
                    </strong>
                </p>
                <p>
                    <strong><em>–Bruno Barbey</em></strong>
                </p>
                <p>
                    De fotografie heeft zich in de afgelopen anderhalve eeuw ontwikkeld tot een
                    niet meer weg te denken medium. Waar de camera in het begin voornamelijk
                    werd ingezet voor opnames van (familie) portretten of straat- en
                    stadsgezichten, is - zeker sinds de intrede van de digitale fotografie -
                    het gebruik van fotografie een dagelijkse bezigheid geworden. Een leuk
                    moment met de kinderen, een onverwachte ontmoeting, een selfie tijdens een
                    evenement of een prachtig natuurverschijnsel, alles kan in het huidig
                    tijdsbestek met een simpele druk op de knop in een oogwenk digitaal worden
                    vereeuwigd. We klikken er maar op los om van alles en nog wat vast te
                    leggen en later terug te kunnen zien.
                </p><hr>
                <h2>
                    De fotokunst in het bedrijf
                </h2>
                <p>
                    Ook in het bedrijfsleven is fotografie niet meer weg te denken en dan
                    vooral voor commerciële toepassingen. We gebruiken het om producten en
                    diensten op een bepaalde manier visueel te presenteren in reclame-uitingen,
                    zoals op reclameborden, in de gedrukte pers, op social media, maar ook uw
                    op website of -shop. Beelden blijven over het algemeen beter in het
                    geheugen ‘hangen’ dan het geschreven woord en zorgen niet alleen voor
                    herkenning van producten of diensten, maar zeker ook voor een grotere
                    naamsbekendheid van een onderneming, de organisatie en de mensen die daar
                    werken. Goede foto’s van management en personeel maakt communicatie met
                    klanten visueler en persoonlijker en niet alleen op een curriculum vitae.
                </p><hr>
                <h2>
                    Uitstraling, een belangrijk aspect
                </h2>
                <p>
                    Graag helpt Mediaverse u bij deze zaken. Met ‘digital photography’ kunnen
                    wij uw producten en diensten op een professionele manier in beeld brengen,
                    zodat u deze later kunt presenteren op uw website. Uw bedrijfspand kan met
                    fotografie een bijzondere uitstraling krijgen, net zoals het visualiseren
                    van de gang van zaken binnen uw organisatie een uniek en dynamisch idee aan
                    de buitenwereld kan geven. ‘Omgevingsfotografie’ kan de sfeer en het imago
                    van uw onderneming beter tot haar recht laten komen en zo zijn er meer
                    mogelijkheden om de bekendheid te vergroten.
                </p>
                <hr>
                <h2>
                    Persoonlijke presentatie
                </h2>
                <p>
                    Redactionele portretten zijn bij ons ook een optie om uw personeel op
                    professionele wijze in beeld te brengen. Wij editen de foto’s tot een
                    perfect eindresultaat waar u gegarandeerd tevreden mee zult zijn.
                </p>
                <p>
                    Wilt u een cv die eruit springt? Of bent u opzoek naar een goede toevoeging
                    op uw LinkedIn-account, dan is een zakelijke fotoshoot misschien iets voor
                    u. Wij creëren samen met u een professioneel pakket aan foto’s die leuk,
                    spontaan én zakelijk zijn.
                </p>
                <p>
                    U hebt de optie om de fotoshoot ter plaatse te doen of u kunt naar een van
                    onze studio’s komen.
                </p>
                <p>
                    Mediaverse staat altijd voor u klaar.
                </p><hr>


            </div>

        </div>
    </div>

@stop

@push('css')
<style>
    h2{
        font-size: 18px !important;
        margin-bottom: 7px !important;
    }
</style>
@endpush

@push('scripts')

@endpush