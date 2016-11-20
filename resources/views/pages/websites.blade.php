@extends('layouts.app')

@section('title', $seo ? $seo->title : '' )
@section('description', $seo ? $seo->description : '')
@section('keywords',  $seo ? $seo->keywords : '')

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('websites')])

    <div class="container">
        <div class="row">

            @include('includes._menu')

            <div class="col-lg-8">
                <h1>Websites</h1>
                <p>
                    Vrijwel iedere onderneming of organisatie heeft tegenwoordig een website. Van aannemers en schilders tot biologische boeren en (semi-) overheden kan
                    verwacht worden dat ze websites beheren, waarop ze informatie geven en hun diensten of producten aanbieden. Toch is het specialistisch werk om een goede
                    site te ontwikkelen voor de juiste doelgroep èn met de uitstraling die bij het bedrijf, de organisatie of persoon past.
                </p>
                <p>
                    Mediaverse kan voor u een unieke website, die aan al uw wensen en eisen voldoet, ontwikkelen en hosten. Wij gebruiken geen standaard WordPress sites, maar
                    wordt speciaal voor u gebouwd met de gedachte en inzet, dat hij er tussen de vele anderen uitspringt.
                </p><hr>
                <h2>
                    Zonder een goed innerlijk, geen goed uiterlijk
                </h2>
                <p>
                    Onder ons kopje design [voeg hyperlink toe] kunt u lezen hoe wij u kunnen helpen met de grafische vormgeving van uw website. Hoe wij u en uw klanten beter
                    samen kunnen brengen door een goed beeld van u te schetsen op de site. Maar bij een website komt niet alleen het grafische gedeelte kijken. Een website
                    moet ook gebruiksvriendelijk en interactief zijn, op een goede server worden gehost [voeg hyperlink toe] en de optimale beveiliging hebben.
                </p>
                <p>
                    <strong><em>“Websites should look good from the inside and inside out.” ― Paul Cookson</em></strong>
                </p>
                <hr>
                <h2>
                    Veiligheid voorop
                </h2>
                <p>
                    Mediaverse geeft de hoogste prioriteit aan de beveiliging van een website. Uw gegevens en die van uw klanten moeten altijd gewaarborgd zijn en blijven. Wij
                    geven u de beschrikking over een goed functionerend administratie-panel of content management systeem [hyperlink CMS] van waaruit u de site gemakkelijk
                    kunt bewerken en veilig houden. Als wij een site voor u op zetten zal die via ons worden gehost, waardoor wij altijd oog op zowel de veiligheid als de
                    uptime van de server en de site kunnen houden.
                </p>
                <hr>
                <h2>
                    De ‘one page’ website
                </h2>
                <p>
                    Met andere specialisten kunnen wij de interactiviteit van uw website verbeteren, waardoor de ervaring van de klant op uw site positief wordt beïnvloed. Een
                    nieuwe trend in de website-wereld is de ‘one page’ website. Hierin zit veel dynamische interactie, die door de meeste mensen wordt ervaren als een erg
                    prettige online omgeving. Het laat de gebruiker soepel door de site heen scrollen, terwijl de gebruiker telkens nieuwe informatie wordt toegeschoteld. Voor
                    ouderen is dit makkelijk, ze hoeven niet een hele site af te zoeken naar informatie. Voor jongeren is de interactiviteit met de site zelf, zoals het
                    toevoegen van korte informatieve filmpjes, uitermate prettig.
                </p>
                <p>
                    Informatie op beeldschermen wordt anders gelezen dan tekst op papier. Bezoekers van sites scannen tekst meer dan deze echt te lezen. Dit heeft gevolgen
                    voor de manier waarop informatie het best kan worden aangeboden. Korte alinea's (maximaal vijf schermregels) of de creatie van een structuur met
                    tussenkopjes en witruimte zorgen voor de beste resultaten. Tekst mag niet over de hele breedte van het beeldscherm lopen, dat leest zeer onprettig. De
                    single page websites kunnen hier prima op inspelen.
                </p>
                <hr>
                <h2>
                    Meerdere media voor uw website, -shop en -applicatie
                </h2>
                <p>
                    Websites worden in toenemende mate via smartphones en tablets bezocht. Vrijwel iedereen kan tegenwoordig ook onderweg online. Bovendien neemt het aantal
                    online transacties met behulp van smartphone en/of tablet hand over hand toe. Uw door Mediaverse ontwikkelde website zal hier zeker aan voldoen.
                </p>
                <hr>
                <h2>
                    Diversiteit geeft verscheidenheid
                </h2>
                <p>
                    Om een website te schrijven gebruikt Mediaverse verschillende zogeheten schrijftalen, zoals HTML, CSS en Javascript. Hierdoor krijgt de website een hoogst
                    interactieve en goed lopende werking en is het eindproduct beschikbaar op verschillende media.
                </p>
                <p>
                    Mediaverse is een innovatieve onderneming, die graag andere bedrijven helpt met het ontwikkelen van een stevige positie in de wereld van het
                    world-wide-web.
                </p>


            </div>

        </div>
    </div>

@stop

@push('css')

@endpush

@push('scripts')

@endpush