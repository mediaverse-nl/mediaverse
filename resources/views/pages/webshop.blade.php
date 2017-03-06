@extends('layouts.app')

@section('title', trans('page.webshop.title'))
@section('description', trans('page.webshop.description'))
@section('keywords', trans('page.webshop.keywords'))

@push('meta-tags')

@endpush

@section('content')

    @include('includes._breadcrumbs', ['breadcrumbs' => Breadcrumbs::render('webshop')])

    <div class="container">
        <div class="row">

            @include('includes._menu')



            <div class="col-lg-8">

                <textarea id="messageArea" name="messageArea" rows="7" class="form-control ckeditor textarea" placeholder="Write your message.."></textarea>


                <h1>
                    Webshop
                </h1>
                <p>
                    De eerste webwinkels ontstonden in 1994 en kregen met de komst van Amazon
                    een jaar later een steeds grotere populariteit. Alleen Nederland kent nu al
                    ruim 30.000 webwinkels op vele terreinen en in alle maten. Één ding hebben
                    ze allemaal gemeen; het verkopen van een product of dienst. De manier
                    waarop transacties plaats vinden, kan uiteenlopen van veiling-sites tot
                    online marktplaatsen, van hotelreserveringen tot het bestellen van een taxi
                    of andere direct leverbare producten en diensten.
                </p>
                <hr>
                <h2>
                    Het internet, uw nieuwe winkel
                </h2>
                <p>
                    Online verkopen veroveren in een versnellend tempo een steeds grotere
                    marktpositie met name in de retail en met name die ondernemingen, die naast
                    een online aanwezigheid ook fysiek te bezoeken zijn, hebben succes. In die
                    zin zal een (vernieuwde) webwinkel mogelijk ook voor u een goede
                    ontwikkeling kunnen zijn om zowel de klantenkring als de omzet te
                    vergroten. Mediaverse adviseert u graag om de ins- en outs van een
                    dergelijke stap voor uw onderneming door te nemen.
                </p>
                <hr>
                <h2>
                    Gemak is voor jong en oud
                </h2>
                <p>
                    Uw assortiment aan producten en diensten kan groot of klein, complex of
                    simpel zijn, één ding staat altijd voorop: de aangeboden diensten of
                    producten moeten op een logische en snel vindbare wijze geordend zijn. Met
                    andere woorden; mensen van welke leeftijd dan ook mogen nooit afhaken,
                    omdat de winkel onoverzichtelijk is en het gezochte product dus lastig te
                    vinden is. Waar men fysiek wel eens bereid is door een stapel kleren of een
                    mand vol aanbiedingen naar een koopje te zoeken, gebeurt dat niet in uw
                    webshop.
                </p>
                <hr>
                <h2>
                    Bewust van omgeving en klant
                </h2>
                <p>
                    Evenals voor uw website draait het bij online verkoop om de doelgroep, die
                    u voor ogen heeft. Die kan lokaal, regionaal, landelijk of internationaal
                    zijn. Of het nou een last minute bestelling van de verjaardagstaart bij de
                    bakker in het dorp betreft of chauffeursdiensten voor een internationale
                    klantenkring, de klant is ook online ‘koning’. Van ontwerp tot
                    gebruiksvriendelijkheid en van taalgebruik tot betaalgemak èn -beveiliging
                    moet alles in lijn zijn met de verwachtingen van de klant.
                </p>
                <hr>
                <h2>
                    Hosting; snelheid, bereikbaarheid en uptime
                </h2>
                <p>
                    Na de creatie van uw product bieden wij onze betrouwbare hostingservices
                    aan, om uw webshop op te laten draaien. Wij kunnen u hierdoor garanderen
                    dan u geen problemen zult hebben met het openhouden van uw webwinkel en wij
                    zorgen ervoor dat uw producten vrijwel altijd online zullen blijven staan.
                </p>
                <p>
                    Op basis van een voorbereidend gesprek concipiëert het ervaren
                    Mediaverse-team een op uw doelgroep toegesneden online verkooppunt.
                </p>


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

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('.textarea').ckeditor({
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });
        // $('.textarea').ckeditor(); // if class is prefered.

    </script>
@endpush