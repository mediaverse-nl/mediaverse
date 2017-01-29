@extends('layouts.app')

@section('title', trans('page.zoekmachine.title'))
@section('description', trans('page.zoekmachine.description'))
@section('keywords', trans('page.zoekmachine.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('zoekmachine')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>
                    Search Engine Optimization
                </h1>
                <p>
                    Vindbaarheid is dé sleutel tot succes op de onlinemarkt.
                </p>
                <p>
                    Heden ten dage is het internet de grootste markt voor de uitwisselingen
                    goederen en diensten. In het verleden was het lastig en tijdrovend om te
                    navigeren op het web en te vinden,waar je naar op zoek was. Totdat de
                    eerste zoekmachines ontstonden en zo massaal gebruikt gingen worden, dat
                    googelen of googlen een veelgebruikt werkwoord werd.
                </p>
                <p>
                    En waar een site oorspronkelijk via een zoekmachine werd gevonden, kwam dat
                    omdat de beheerder van een website die site voorlegde aan de zoekmachine.
                    Nu wordt dit automatisch gedaan door zo genoemde “crawlers”, programma’s
                    die websites bezoeken en indexeren op onderwerpen en keywords. Om websites
                    goed vindbaar te maken en dus meer bezoekers te krijgen ontstond een
                    internet marketingstrategie, die Search Engine Optimization (SEO) werd
                    genoemd.
                </p>
                <hr>
                <h2>
                    Uw context, niet alleen een leuk verhaaltje
                </h2>
                <p>
                    SEO is een techniek die wordt gebruikt voor het optimaliseren van de index
                    van websites door in de teksten op een bepaalde wijze woorden en zinnen te
                    verwerken, die de betreffende site sneller vindbaar maken. Als dit op de
                    juiste manier wordt gedaan, zullen zoekmachines als Google, Bing en Yahoo!
                    aan de hand van woorden en woordcombinaties de website een hoge ranking
                    geven met het gevolg, dat veel meer mensen de pagina’s van uw site zullen
                    bezoeken. Ook is het toevoegen van (cross)links naar andere relevante
                    webpagina’s een wezenlijk onderdeel van goede zoekmachine-optimalisatie.
                </p>
                <p>
                    <strong>
                        <em>
                            “Mediaverse zorgt er op een professionele manier voor, dat niet
                            alleen veel mensen uw site zullen vinden en bezoeken, maar ook
                            vooral de juiste mensen. Door het maximaliseren van de relevante
                            kernwoorden zullen potenti
                        </em>
                    </strong>
                    <strong>
                        <em>
                            ële klanten, die ook écht interesse hebben in de producten of
                            diensten die u aan biedt, naar de site worden getrokken met als
                            doel meer bekendheid en omzet. Met name informatieve websites
                            hebben een goede SEO-strategie nodig om zo zoveel mogelijk mensen
                            te kunnen bereiken. Kwantitatief veel tekst (content) op de site
                            betekend echter zeker niet dat de vindbaarheid ook wordt verhoogd.”
                        </em>
                    </strong>
                </p>
                <hr>
                <h2>
                    Een krap plaatsje op het grote internet
                </h2>
                <p>
                    Het wordt steeds meer ‘dringen’ op het internet. Zakelijk gezien, is het
                    belangrijk dat u ‘voordringt’ om beter in beeld te komen, want uw
                    concurrentie zit niet stil in de weg naar topposities bij de grote
                    zoekmachines. Om dat professioneel te bewerkstelligen zullen wij uw website
                    met een goed samen-werkend en dynamisch team beter vindbaar maken!
                </p>
                <p>
                    SEO is dé techniek voor een veelvuldig vindbare site!
                </p>
                <hr>

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