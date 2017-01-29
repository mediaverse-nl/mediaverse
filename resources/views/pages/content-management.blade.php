@extends('layouts.app')

@section('title', trans('page.cms.title'))
@section('description', trans('page.cms.description'))
@section('keywords', trans('page.cms.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('content-management')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Content Management</h1>
                <p>
                    Content Management
                </p>
                <p>
                    Eén van de belangrijkste zaken voor een succesvolle bedrijfsvoering is het verzamelen van feedback. Door de terugkoppeling met klanten kan informatie
                    worden vergaard over wat zij willen, op welke tijden en dagdelen klanten actief zijn en naar het soort producten en/of diensten dat in bepaalde seizoenen
                    of periodes wordt gezocht.
                </p>
                <p>
                    Mode, zoals aangeboden door kledingsites als Zalando of Wehkamp, is zeer seizoensgevoelig. Hier zie je dat sites compleet wordt aangepast aan de tijd van
                    het jaar. Items waar in een bepaald jaargetijde veel vraag naar is, worden groot en duidelijk aangegeven op de voorpagina.
                </p>
                <p>
                    <strong>
                        <em>
                            “What is the shortest word in the English language that contains the letters: abcdef? Answer: feedback. Don’t forget that feedback is one of the
                            essential elements of good communication.”
                        </em>
                    </strong>
                </p>
                <p>
                    <strong><em>– Anonymous</em></strong>
                </p>
                <hr>
                <h2>
                    Het syteem
                </h2>
                <p>
                    Een Content Management System, ook afgekort als CMS, komt hierbij enorm van pas. Dit is een webapplicatie die kan worden toegevoegd aan uw site. Via een
                    CMS kunnen individuele webpagina’s, de online winkel of de hele website worden aangepast. Door middel van zogenaamde ‘creation en/of modification’ is het
                    mogelijk de site aan te vullen of up te daten zonder gebruik te hoeven maken van coderen; het CMS doet dit automatisch, zodat u makkelijk kunt werken met
                    een gebruiksvriendelijke interface.
                </p>
                <p>
                    Het CMS voegt allerlei opties en functies toe aan uw website om de ‘digital content’ van uw site makkelijk toegankelijk te maken. Het laten indexeren is
                    een van deze opties. Door het indexeren is het mogelijk snel door uw website te “bladeren” op zoek naar verschillende keywords, die u in een zoekbalk
                    aangeeft. Deze optie kunt u natuurlijk ook toevoegen aan uw live website, zodat klanten hier gebruik van kunnen maken.
                </p>
                <hr>
                <h2>
                    De feedback is uw vriend
                </h2>
                <p>
                    Zoals eerder aangegeven, is dat het buitengewoon belangrijk om informatie over wat bezoekers op uw webpagina’s of in uw webwinkel doen, te verwerken en te
                    gebruiken. Via de interface van een CMS kunnen deze gegevens worden omgezet in grafieken en tabellen, die u nieuwe inzichten kunnen geven in de behoeftes
                    van uw (potentiële) klanten. Er kan precies worden bekeken naar wat er wordt gezocht, rond welke tijden, hoe een gebruiker zich over de site heen “beweegt”
                    en nog veel meer. Dit is cruciale bedrijfsinformatie, die u permanent in staat stelt uw site of shop te optimaliseren en als onderneming beter in te spelen
                    op de markt.
                </p>
                <hr>
                <h2>
                    Controle op de site
                </h2>
                <p>
                    Om te zorgen dat niet iedere bezoeker alle delen van uw site kan zien, kunt u als administrator een ‘userinterface’ toevoegen aan de site. Dit betekent dat
                    gebruikers zich kunnen aanmelden en zo kunnen inloggen op uw webshop of -site om verdere (digitale) content te zien of een bestelling te doen. Op die wijze
                    kan ook het gebruikerspatroon van individuele bezoekers worden gevolgd en bijvoorbeeld klanten, die voor wat langere tijd de website of -winkel niet hebben
                    bezocht, via een persoonlijke e-mail met een speciale actie of anderzins worden aangespoord om weer eens ‘op bezoek’ te komen.
                </p>
                <p>
                    Kortom CMS is dé webapplicatie om uw website of -shop te bewerken en informatie te verzamelen over uw gebruikers en met de verwerking daarvan uw klanten
                    beter te bedienen.
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